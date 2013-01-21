<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Index_Account extends Controller_Index {

    public function before(){
        parent::before();
        if (!$this->auth->logged_in()) {
            $this->redirect('login');
        }

        $account_menu = Widget::load('menuaccount');

         // Выводим в шаблон
        $this->template->block_right = null;
        $this->template->block_left = array($account_menu);
    }

    public function action_index() {
        
        $content = View::factory('index/account/v_account_index');
                        

        // Выводим в шаблон
        $this->template->title = 'Личный кабинет';
        $this->template->page_title = 'Личный кабинет';
        $this->template->block_center = array($content);
    }

    public function action_orders() {

        $orders = ORM::factory('Order')->where('user_id', '=', $this->user->id)->find_all();

        $content = View::factory('index/account/v_account_orders', array(
            'orders'  => $orders,
        ));
        
        // Выводим в шаблон
        $this->template->title = 'Заказы';
        $this->template->page_title = 'Заказы';
        $this->template->block_center = array($content);
    }

    public function action_profile() {
        if (isset($_POST['submit'])) {
                    $users = ORM::factory('User');

                    try {
                        $users->where('id', '=', $this->user->id)
                                ->find()
                                ->update_user($_POST, array(
                                    'username',
                                    'first_name',
                                    'email',
                                    'address',
                                ));

                        $this->redirect('account/profile');
                    }
                    catch (ORM_Validation_Exception $e) {
                        $errors = $e->errors('auth');
                    }
                }


        $content = View::factory('index/account/v_account_profile')
                        ->bind('user', $this->user)
                        ->bind('errors', $errors);

        // Выводим в шаблон
        $this->template->title = 'Профиль';
        $this->template->page_title = 'Профиль';
        $this->template->block_center = array($content);
    }


}