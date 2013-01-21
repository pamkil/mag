<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню товары"
 */
class Controller_Widgets_Admin_Menuproducts extends Controller_Widgets {

    public $template = 'widgets/admin/w_menuproducts';    // Шаблон виждета
    
    public function action_index()
    {
        $select = Request::initial()->controller();

        $menu = array(
            'Товары' => array('products'),
            'Категории' => array('categories'),
            'Параметры' => array('options'),
        );

        // Вывод в шаблон
        $this->template->menu = $menu;
        $this->template->select = $select;
    }

}