<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Статистика магазина"
 */
class Controller_Widgets_Admin_Adminstat extends Controller_Widgets {

    public $template = 'widgets/admin/w_adminstat';    // Шаблон виждета
    
    public function action_index()
    {
        $count['news'] = ORM::factory('New')->count_all();
        $count['products'] = ORM::factory('Product')->count_all();

        // Вывод в шаблон
        $this->template->count = $count;
    }

}