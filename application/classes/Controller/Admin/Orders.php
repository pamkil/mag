<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Заказы
 */
class Controller_Admin_Orders extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load_admin('menuorders');
    }

    public function action_index() {
       
        $content = View::factory('admin/orders/v_orders_index');

        // Вывод в шаблон
        $this->template->page_title = 'Заказы';
        $this->template->block_center = array($content);
    }
}