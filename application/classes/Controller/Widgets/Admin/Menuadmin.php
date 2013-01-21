<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню админа"
 */
class Controller_Widgets_Admin_Menuadmin extends Controller_Widgets {

    public $template = 'widgets/admin/w_menuadmin';    // Шаблон виждета
    
    public function action_index()
    {
        $select = Request::initial()->controller();

        $menu = array(
            'Главная' => array('main'),
            'Заказы' => array('orders'),
            'Страницы' => array('pages', 'news', 'articles'),
            'Товары' => array('products', 'categories', 'options'),
            'Пользователи' => array('users', 'buyers', 'subscribe'),
            'Настройки' => array('settings'),
        );

        // Вывод в шаблон
        $this->template->menu = $menu;
        $this->template->select = $select;
    }

}