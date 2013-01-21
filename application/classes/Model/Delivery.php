<?php defined('SYSPATH') or die('No direct script access.');

class Model_Delivery extends ORM {

    protected $_table_name = 'delivery';

    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            ),
            'description' => array(
                array('not_empty'),
            ),
            'cost' => array(
                array('not_empty'),
            ),
        );
    }

    public function labels()
    {
        return array(
            'name' => 'Способ доставки',
            'description' => 'Описание',
            'cost' => 'Цена'
        );
    }

    public function filters()
    {
        return array(
            TRUE => array(
                array('trim'),
            ),
            'name' => array(
                array('strip_tags'),
            ),
            'description' => array(
                array('strip_tags'),
            ),
        );
    }
} 
