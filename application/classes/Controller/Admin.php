<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс главной страницы
 */
class Controller_Admin extends Controller_Base {

    public $template = 'admin/v_base';

    public function  before() {
        parent::before();
        if (!$this->auth->logged_in('admin')) {
            //$this->request-> redirect('login');
            $this->redirect('login');
        }

        $menu_admin = Widget::load_admin('menuadmin');

        // Вывод в шаблон
        $this->template->styles[] = 'media/css/style.css';
        $this->template->styles[] = 'media/css/style_admin.css';
        $this->template->menu_admin = $menu_admin;
        $this->template->submenu = null;
    }
    
}