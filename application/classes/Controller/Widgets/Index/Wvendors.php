<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Лучшие товары"
 */
class Controller_Widgets_Index_WVendors extends Controller_Widgets {
    
    public $template = 'widgets/index/v_w_vendors';

    public function action_index()
    {
        // Получаем список категорий
        $vendors = ORM::factory('Vendor')->find_all();
        $this->template->vendors = $vendors;
        $this->template->heading = 'Производители';
       
        //$cat = (int) $this->request->param('cat');
        
        // Получаем список продукций
        //$category = ORM::factory('Category')->where('id', '=', $cat)->find();
        
        //$this->template->cat = $cat;
        //$this->template->category = $category;
    }
}