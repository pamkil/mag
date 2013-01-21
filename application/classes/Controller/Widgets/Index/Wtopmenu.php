<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Верхнее меню"
 */
class Controller_Widgets_Index_WTopmenu extends Controller_Widgets {
    
    public $template = 'widgets/index/v_w_topmenu';

    public function action_index()
    {
        $categories = ORM::factory('Category')->find_all();
        $categories = ORM::factory('Category')->fulltree()->as_array();

        $content = View::factory('admin/categories/v_categories_index')
                ->bind('categories', $categories)
                ->bind('errors', $errors);
        
        
        $id_cat = Request::initial()->param('cat');
        $select = ORM::factory('Category')->where('id', '=', $id_cat)->find()->title;
        
        
        if ($select == NULL)
        {
            $select = Request::initial()->action();
        }

        $menu =  array(
            'Главная' => array('/'),
            $categories
        );
       //$select = 'Главная';

        // Вывод в шаблон
        $this->template->menu = $menu;
        $this->template->select = $select;
    }

}