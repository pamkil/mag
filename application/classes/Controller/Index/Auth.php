<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */
class Controller_Index_Auth extends Controller_Index {

    public function action_index() {
        $this->action_login();
    }

    public function action_login() {

        if(Auth::instance()->logged_in()) {
            $this->redirect('account');
        }

        if (isset($_POST['submit'])){
            $data = Arr::extract($_POST, array('username', 'password', 'remember'));
            $status = Auth::instance()->login($data['username'], $data['password'], (bool) $data['remember']);

            if ($status){
                if(Auth::instance()->logged_in('admin')) {
                    $this->redirect('admin');
                }
                
                $this->redirect('account');
            }
            else {
                $errors = array(Kohana::message('auth/user', 'no_user'));
            }
        }

        $content = View::factory('index/auth/v_auth_login')
                    ->bind('errors', $errors)
                    ->bind('data', $data);

        // Выводим в шаблон
        $this->template->title = 'Вход';
        $this->template->page_title = 'Вход';
        $this->template->block_center = array($content);
    }

    public function action_register() {

        if (isset($_POST['submit'])){
            $data = Arr::extract($_POST, array('username', 'password', 'first_name', 'password_confirm', 'email'));
            $users = ORM::factory('User');

            try {
                $users->create_user($_POST, array(
                    'username',
                    'first_name',
                    'password',
                    'email',
                ));

                $role = ORM::factory('Role')->where('name', '=', 'login')->find();
                $users->add('roles', $role);
                $role = ORM::factory('Role')->where('name', '=', 'admin')->find();
                $users->add('roles', $role);
                $this->action_login();
                $this->redirect('account');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('auth');
            }
        }

        $content = View::factory('index/auth/v_auth_register')
                            ->bind('errors', $errors)
                            ->bind('data', $data);

        // Выводим в шаблон
        $this->template->title = 'Регистрация';
        $this->template->page_title = 'Регистрация';
        $this->template->block_center = array($content);
    }
    
    public function action_logout() {
        if(Auth::instance()->logout()) {
            $this->redirect();
        }
    }

}