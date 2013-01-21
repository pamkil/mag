<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {

  public function labels()
    {
        return array(
            'username' => 'Логин',
            'email' => 'E-mail',
            'first_name' => 'ФИО',
            'password' => 'Пароль',
            'password_confirm' => 'Повторить пароль',
        );
    }

    public function rules()
    {
        return array(
            'username' => array(
                    array('not_empty'),
                    array('min_length', array(':value', 4)),
                    array('max_length', array(':value', 32)),
                    array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
                    //array(array($this, 'username_available'), array(':validation', ':field')),
            ),
            'first_name' => array(
                    array('not_empty'),
                    array('min_length', array(':value', 2)),
                    array('max_length', array(':value', 32)),
            ),
            'password' => array(
                    array('not_empty'),
            ),
            'email' => array(
                    array('not_empty'),
                    array('min_length', array(':value', 4)),
                    array('max_length', array(':value', 127)),
                    array('email'),
                    //array(array($this, 'email_available'), array(':validation', ':field')),
            ),
        );
    }
} 
