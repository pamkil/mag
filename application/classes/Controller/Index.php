<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс главной страницы
 */
class Controller_Index extends Controller_Base {

    public $template = 'index/v_base';	// Базовый шаблон
	public $ajaxAllow = false;			//Разрешение на использования Ajax				

    public function  before() {
        parent::before();
		$this->auto_render = TRUE;
		//Если выполняем ajax запрос, то отключаем генерацию мета данных
		if ($this->ajaxAllow && (Request::current()->is_ajax() || isset ( $_GET ['ajax'] ))) 
		{
			$this->auto_render = false;
			
		} 
		else 
		{
			
				
			
			// Виджеты
			$menu = Widget::load_index('wtopmenu');            // Меню
			$vendors = Widget::load_index('wvendors');         // Производители
			$alphabet = Widget::load_index('walphabar');		//алфавитный поиск
			$cart = Widget::load_index('wcart');				//виджет карзины

			// Вывод в шаблон 
			$this->template->scripts[] = 'media/js/jquery-1.9.0.min.js';
			$this->template->scripts[] = 'media/js/jolie74.js';
			//$this->template->styles[] = 'media/css/style.css';
			$this->template->styles[] = 'media/css/template.css';
			$this->template->cart = $cart;
			$this->template->block_innertop = array($alphabet);
			$this->template->block_menu = array($menu);     	// Меню
			$this->template->block_sidebar_r = array($vendors);
		}
    }
	
	public function after() 
	{
		if ($this->ajaxAllow && (Request::current()->is_ajax() || isset ( $_GET ['ajax'] ))) 
		{
			$this->auto_render = false;
			$this->request->headers ['content-type'] = 'application/json';
			$this->request->response = json_encode ( $this->template->as_array() );
		}
		parent::after ();
	}
}