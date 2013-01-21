<?php defined('SYSPATH') or die('No direct script access.');

class Model_Vendor extends ORM {
    
    protected $_table_name = 'vendors';

    protected $_primary_key = 'id';

    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'products' => array(
            'model' => 'Product',
            'foreign_key' => 'vendor_id'
        ),
    );

    protected $_belongs_to = array(
        'image' => array(
            'model' => 'Image',
            'foreign_key' => 'image_id',
        ),
    );
    
    public function rules()
    {
        return array(
            'title' => array(
                array('not_empty'),
            ),
            'name' => array(
                array('not_empty'),
            ),
            'cost' => array(
                array('not_empty'),
                array('numeric'),
            ),
        );
    }


    public function labels()
    {
        return array(
            'title' => 'Наименование',
            'description' => 'Описание',
            'cost' => 'Цена',
        );
    }

    public function filters()
    {
        return array(
            TRUE => array(
                array('trim'),
            ),
            'title' => array(
                array('strip_tags'),
            ),
            'cost' => array(
                array('strip_tags'),
            ),
        );
    }

} 
