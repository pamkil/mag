<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Категории товаров
 */
class Controller_Admin_Options extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load_admin('menuproducts');
    }

    public function action_index() {

        $content = View::factory('admin/options/v_options_index');

        // Вывод в шаблон
        $this->template->page_title = 'Параметры';
        $this->template->block_center = array($content);
    }
}