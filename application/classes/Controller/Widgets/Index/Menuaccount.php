<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню личного кабинета"
 */
class Controller_Widgets_Index_Menuaccount extends Controller_Widgets {

    public $template = 'widgets/index/w_menuaccount';    // Шаблон виждета
    
    public function action_index()
    {
        $select = Request::initial()->action();

        $menu = array(
            'Личный кабинет' => array('index'),
            'Заказы' => array('orders'),
            'Профиль' => array('profile'),
        );

        // Вывод в шаблон
        $this->template->menu = $menu;
        $this->template->select = $select;
    }

}