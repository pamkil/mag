<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Корзина"
 */
class Controller_Widgets_Index_WCart extends Controller_Widgets {
    
    public $template = 'widgets/index/v_w_cart';

    public function action_index()
    {
        $products = Session::instance()->get('products');
        $count = ($products) ? array_sum($products): 0;
        
        $this->template->count = $count;
    }

}