<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Каталог
 * Вывод товаров или товара
 */
class Controller_Index_Catalog extends Controller_Index {

    protected $select = '';
    public function before() {
        parent::before();
        $this->template->scripts[] = 'media/js/jquery-1.6.2.min.js';
        $this->template->scripts[] = 'media/js/view_images.js';
		$this->template->styles[] = 'media/css/catalog.css';
        $this->template->select = $this->select;
    }


    public function action_index() {

        // Получаем список продукций
        $categories = ORM::factory('Category')->find_all();
        $content = View::factory('index/catalog/v_catalog_index', array(
            'categories' => $categories,
        ));

        // Выводим в шаблон
        $this->template->title = 'Каталог';
        $this->template->page_title = 'Каталог';    
        $this->template->block_center = array($content);
        $this->template->block_right = null;

    }

    // Просмотр категории
    public function action_cat() {
        $cat = (int) $this->request->param('cat');
        
        // Виджет поиска
        //$search_form = Widget::load('search');

        // Получаем список продукций
        $category = ORM::factory('Category')->where('id', '=', $cat)->find();
        $select = $category->title;

        if(!$category->loaded()){
            $this->redirect();
        }
        
        $products = $category->products->where('status', '!=', 0)->find_all();
        $content = View::factory('index/catalog/v_catalog_cat', array(
            'products' => $products,
            'cat' => $cat,
            'category' => $category,
            'search_form' => '',
        ));
        
        // Выводим в шаблон
        $this->template->title = $category->title;
        $this->template->page_title = $category->title;
        $this->template->block_center = array($content);
        $this->template->block_right = null;
    }

    // Просмотр товара
    public function action_view() {
        $cat = (int) $this->request->param('cat');
        $id = (int) $this->request->param('id');

        $product = ORM::factory('Product')->where('id', '=', $id)->and_where('status', '!=', 0)->find();
        $category = ORM::factory('Category')->where('id', '=', $cat)->find();
        $select = $category->title;
        if (!$product->loaded()){
            $this->redirect();
        }

        $content = View::factory('index/catalog/v_catalog_view', array(
            'product' => $product,
            'comments' => $product->comments->find_all(),
            'images' => $product->images->find_all(),
            'category' => $category,
        ));

        // Выводим в шаблон

        if ($category->loaded()){
            $this->template->page_title = HTML::anchor('catalog/cat/c'. $category->id, $category->title) . ' &rarr; ' . $product->title;
        }
        else {
            $this->template->page_title = $product->title;
        }
        
        
        $this->template->title = $product->title;
        $this->template->block_center = array($content);
        $this->template->block_right = null;
    }
    
    //Вывод всех товаров
    public function action_products() 
    {
        // Виджет поиска
        //$search_form = Widget::load('search');

        // Получаем список продукций
        $products = ORM::factory('Product')->find_all();

//        if(!$products->loadedoaded()){
//            $this->redirect();
//        }
        
        $content = View::factory('index/catalog/v_catalog_products', array(
            'products' => $products,
            'cat' => '',
            'category' => '',
            'search_form' => '',
        ));
        
        // Выводим в шаблон
        //$this->template->title = $products[0]->title;
        //$this->template->page_title = $products[0]->title;
        $this->template->block_center = array($content);
        $this->template->block_right = null;
    }
    
    //Вывод одного товара
    public function action_product() 
    {
        $id = (int) $this->request->param('id');

        $product = ORM::factory('Product')->where('id', '=', $id)->and_where('status', '!=', 0)->find();
        
        $select = $product->categories->title;
        echo $select;
        
        if (!$product->loaded()){
            $this->redirect();
        }

        $content = View::factory('index/catalog/v_catalog_view', array(
            'product' => $product,
            'comments' => $product->comments->find_all(),
            'images' => $product->images->find_all(),
            
        ));

        // Выводим в шаблон

       // if ($category->loaded()){
         //   $this->template->page_title = HTML::anchor('catalog/cat/c'. $category->id, $category->title) . ' &rarr; ' . $product->title;
      //  }
       // else {
            $this->template->page_title = $product->title;
       // }
        
        $this->template->title = $product->title;
        $this->template->block_center = array($content);
        $this->template->block_right = null;
    }
    
    public function action_vendor() 
    {
        $content = View::factory('index/catalog/v_catalog_vendors')
                        ->bind('vendors', $vendors);
                        
        
        $param = $this->request->param('id');
        if ($param)
        {
            if(preg_match('/^\d+$/', $param))
            { //тут список производителей по id
                $id = (int) $param;
                $vendor = ORM::factory('Vendor')->where('id', '=', "$id")->find();
                if (!$vendor)
                {
                    //$this->redirect();
                    echo 'нет производителя';
                }
                else
                {
                    echo $vendor->title;
                    $products = ORM::factory('Product')->where('vendor_id', '=', $param)->find_all();
        
                    $content = View::factory('index/catalog/v_catalog_products', array(
                        'products' => $products,
                        'cat' => '',
                        'category' => '',
                        'search_form' => '',
                    ));
                    
                    
                }
            }
            else
            {
                if ( preg_match("/^[A-Z]{1}$/", $param))
                {  //тут список производителей по букве
                    
                    $char = $param;
                    $vendors = ORM::factory('Vendor')->where('title', 'like', "$char%")->find_all();//->and_where('status', '!=', 0)->find();
                    if (count($vendors) == 0)
                    {
                        //$this->redirect();
//                        echo 'нет производителя';
                    }
                    else
                    {
//                        foreach ($vendors as $vendor)
//                        {
//                            echo $vendor->title;
//                            echo " || ";
//                        }
                        
                    }
                }
                else
                { //тут нет странички
                    

//                    echo 'тут redirect';
                }
            }
        }
        else
        {  //тут полный список производителей
            echo 'тут все остальное';
            $vendors = ORM::factory('Vendor')->find_all();
            if (count($vendors) == 0)
            {
                //$this->redirect();
//                echo 'нет производителя';
                
            }
            else
            {
//                foreach ($vendors as $vendor)
//                {
//                    echo $vendor->title;
//                    echo " || ";
//                }

            }
        }
        //$this->template->image = $image;
        $this->template->block_center = array($content);
//        $product = ORM::factory('Product')->where('id', '=', $id)->and_where('status', '!=', 0)->find();
//        
//        $select = $product->categories->title;
//        echo $select;
//        
//        if (!$product->loaded()){
//            $this->redirect();
//        }
//
//        $content = View::factory('index/catalog/v_catalog_view', array(
//            'product' => $product,
//            'comments' => $product->comments->find_all(),
//            'images' => $product->images->find_all(),
//            'category' => '',
//        ));
//
//        // Выводим в шаблон
//
//       // if ($category->loaded()){
//         //   $this->template->page_title = HTML::anchor('catalog/cat/c'. $category->id, $category->title) . ' &rarr; ' . $product->title;
//      //  }
//       // else {
//            $this->template->page_title = $product->title;
//       // }
//        
//        $this->template->title = $product->title;
//        $this->template->block_center = array($content);
//        $this->template->block_right = null;
    }
}