<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Корзина
 */
class Controller_Index_Cart extends Controller_Index {

    public function before()
    {
        parent::before();

        // Выводим в шаблон
        $this->template->block_left = null;
        $this->template->block_right = null;
    }

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

        $content = View::factory('index/cart/v_cart_index')
                ->bind('products', $cart['products'])
                ->bind('sum', $cart['sum']);

        // Выводим в шаблон
        $this->template->title = 'Ваша корзина';
        $this->template->page_title = 'Ваша корзина';
        $this->template->block_center = array($content);

    }

    public function action_add()
    {
        // Получить существующие товары из куков
        $products_s = $this->session->get('products');
        $id = $this->request->param('id');

        if (isset($products_s[$id]))
        {
            $products_s[$id]++;
        }
        else
        {
            $products_s[$id] = 1;
        }

        $this->session->set('products', $products_s);
		$this->go_back();
    }
	
	 public function action_inc()
    {
		$this->auto_render = false;
	
	
        // Получить существующие товары из куков
        $products_s = $this->session->get('products');
        $id =  $this->request->param('id');
		$product = ORM::factory('Product')->where('id', '=', $id)->find();

        if (isset($products_s[$id]))
        {
            $products_s[$id]++;
        }
        else
        {
            $products_s[$id] = 1;
        }

        $this->session->set('products', $products_s);
		$str = '<span>$product->id $products_s[$id] </span>';
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
        }

        $this->session->set('products', $products_s);
        //$this->redirect(Request::initial()->referrer());
		$this->go_back();
    }
	
	public function action_clear()
    {
        // Получить существующие товары из куков
        
        $this->session->delete('products');
		$this->go_back();
    }


    public function action_order()
    {
        if (!$this->auth->logged_in())
        {
            $this->redirect('login');
        }

        $delivery = ORM::factory('Delivery')->find_all();

        $content = View::factory('index/cart/v_cart_order', array(
            'delivery' => $delivery,
            'user' => $this->user,
        ));

        // Выводим в шаблон
        $this->template->title = 'Оформление заказа';
        $this->template->page_title = HTML::anchor('cart', 'Ваша корзина') . ' &rarr; ' . 'Оформление заказа';
        $this->template->block_center = array($content);
    }

    public function action_payment()
    {
        if (!$this->auth->logged_in())
        {
            $this->redirect('login');
        }

        $delivery_id = Arr::get($_POST, 'delivery');
        

        if ($delivery_id == NULL)
        {
            $this->redirect('cart/order');
        }

        // Обновить адрес покупателя
        $users = ORM::factory('User');
        $users->where('id', '=', $this->user->id)
                            ->find()
                            ->update_user($_POST, array(
                                'address',
                            ));

        $delivery = ORM::factory('Delivery')->where('id', '=', $delivery_id)->find();
        $this->session->set('sum_delivery', $delivery->cost);
        $this->session->set('delivery_id', $delivery_id);

        $content = View::factory('index/cart/v_cart_pay', array(
            'user' => $this->user,
            'address' => Arr::get($_POST, 'address'),
            'delivery' => $delivery->name,
            'cost_order' => $this->session->get('sum'),
            'cost_delivery' => $delivery->cost,
        ));
        
        // Выводим в шаблон
        $this->template->title = 'Оформление заказа';
        $this->template->page_title = HTML::anchor('cart', 'Ваша корзина') . ' &rarr; ' . HTML::anchor('cart/order', 'Оформление заказа') . ' &rarr; Оплата';
        $this->template->block_center = array($content);
        
    }


}