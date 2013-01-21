<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Категории товаров
 */
class Controller_Admin_Categories extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load_admin('menuproducts');
    }

    public function action_index() {
        $categories = ORM::factory('Category');
        $cat = Arr::get($_POST, 'cat');

        if (isset($_POST['add']))
        {
            $title = Arr::get($_POST, 'title');

            $categories->title = $title;

            try
            {
                if (!$cat)
                {
                    $categories->make_root();
                }
                else
                {
                    $categories->insert_as_last_child($cat);
                }

                $this->redirect('admin/categories');
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('validation');
            }
        }

        if (isset($_POST['delete']))
        {
            if ($cat)
            {
                ORM::factory('Category', $cat)->delete();
            }

            $this->redirect('admin/categories');
        }

        $categories = $categories->fulltree()->as_array();
        
        $content = View::factory('admin/categories/v_categories_index')
                ->bind('categories', $categories)
                ->bind('errors', $errors);

        // Вывод в шаблон
        $this->template->page_title = 'Категории';
        $this->template->block_center = array($content);
    }
    
}