<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Запрет показа виджета
 * 'виджет' => array(
 *      'контроллер' => array('экшен1', 'экшен2')
 *  )
 *
 */

return array(
    'news' => array(
        'catalog' => array('index'),
        'cart' => array('index'),
        'auth' => array('all_actions'),
        'account' => array('all_actions'),
        'news' => array('all_actions'),
    ),
    'menu' => array(
        'cart' => array('index'),
        'auth' => array('all_actions'),
        'account' => array('all_actions'),
    ),
    'login' => array(
        'cart' => array('index'),
        'auth' => array('login', 'register'),
        'account' => array('all_actions'),
    ),
);
