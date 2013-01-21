<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Лучшие товары"
 */
class Controller_Widgets_Index_WTopproducts extends Controller_Widgets {
    
    public $template = 'widgets/index/v_w_topproducts';

    public function action_index()
    {
        // Получаем список категорий
        $products = ORM::factory('Product')->limit(6)->find_all()->as_array();
        $this->template->products = $products;
       
        //$cat = (int) $this->request->param('cat');
        
        // Получаем список продукций
        //$category = ORM::factory('Category')->where('id', '=', $cat)->find();
        
        //$this->template->cat = $cat;
        //$this->template->category = $category;
    }
}