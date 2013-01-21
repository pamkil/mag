<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню заказов"
 */
class Controller_Widgets_Admin_Menupages extends Controller_Widgets {

    public $template = 'widgets/admin/w_menupages';    // Шаблон виждета
    
    public function action_index()
    {
        $select = Request::initial()->controller();

        $menu = array(
            'Страницы' => array('pages'),
            'Новости' => array('news'),
            'Статьи' => array('articles'),
        );

        // Вывод в шаблон
        $this->template->menu = $menu;
        $this->template->select = $select;
    }

}