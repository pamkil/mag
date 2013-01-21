<?php defined('SYSPATH') or die('No direct script access.');

class Model_Order extends ORM {

    protected $_has_many = array(
        'products' => array(
            'model'   => 'Product',
            'through' => 'orders_products',
        ),
    );
    
    protected $_belongs_to = array(
        'delivery' => array(
            'model' => 'Delivery',
            'foreign_key' => 'delivery_id',
        ),
        
    );
} 
