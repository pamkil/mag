<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер для работы с Корзиной по технологии Ajax
 * @author Pamkil
 * 
 */
class Controller_Ajax_AjaxCart extends Controller_Index {

    /*
     * 
     * 
     */
    public function before()
    {
		//$this->ajaxAllow = true;
        parent::before();
		$this->auto_render = false;
		if(!Request::current()->is_ajax())   //Если запрос введен в адресной строке
            $this->redirect(URL::site()); 

    }

    /*
    * Функция формирования формы корзины
    * @author Pamkil
    * @param $products_s Забирает из сессии список и количество товаров
    */
    public function action_index()
    {
        $products_s = $this->session->get('products');
		
        if ($products_s != NULL)
        {
            $products = ORM::factory('Product');

            foreach($products_s as $id => $count)
            {
                $products->or_where('id', '=', $id);
            }

            $products = $products->find_all();

            // Формирование корзины
            $cart = array();
            $sum = 0;
            
            foreach ($products as $product)
            {
                $cart['products'][] = array(
                    'id' => $product->id,
                    'title' => $product->title,
                    'count' => $products_s[$product->id],
                    'cost' => $product->cost,
                );
                
                $sum += $product->cost * $products_s[$product->id];
            }
            
            $cart['sum'] = $sum;
            $this->session->set('sum', $sum);
        }
        else
        {
            $products = NULL;
        }
    }

    public function action_inc()
    {
	
        // Получить существующие товары из куков
        $products_s = $this->session->get('products');
        $id =  $this->request->param('id');
		//$product = ORM::factory('Product')->where('id', '=', $id)->find();

        if (isset($products_s[$id]))
        {
            $products_s[$id]++;
        }
        else
        {
            $products_s[$id] = 1;
        }

        $this->session->set('products', $products_s);
		echo (Widget::load_index('wcart'));

    }
	
	
	public function action_dec()
    {
        // Получить существующие товары из куков
        $products_s = $this->session->get('products');
        $id = $this->request->param('id');

        if (isset($products_s[$id]))
        {
            $products_s[$id]--;
			if ($products_s[$id] == 0)
			{
				unset($products_s[$id]);
			}
        }

        $this->session->set('products', $products_s);
		echo (Widget::load_index('wcart'));
    }
	
	 public function action_count()
    {
		$count = Arr::get($_POST, 'count_1', '');

	  // Получить существующие товары из куков
        $products_s = $this->session->get('products');
        $id =  $this->request->param('id');
		//$product = ORM::factory('Product')->where('id', '=', $id)->find();

        if (isset($products_s[$id]))
        {
            $products_s[$id]+= $count;
        }
        else
        {
            $products_s[$id] = $count;
        }

        $this->session->set('products', $products_s);
		echo (Widget::load_index('wcart'));

    }
	
	public function action_delete()
	{
	// Получить существующие товары из куков
        $products_s = $this->session->get('products');
        $id = $this->request->param('id');

        if (isset($products_s[$id]))
        {
            unset($products_s[$id]);
        }
       $this->session->set('products', $products_s);

		echo (Widget::load_index('wcart'));
	}
	
	public function action_clear()
    {
        $this->session->delete('products');
		echo (Widget::load_index('wcart'));
    }


   


}