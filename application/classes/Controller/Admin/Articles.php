<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Articles extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load_admin('menupages');
        $this->template->page_title = 'Статьи';
    }

    public function action_index() {
        
        $content = View::factory('admin/articles/v_articles_index');

        // Вывод в шаблон
        $this->template->block_center = array($content);
    }

}