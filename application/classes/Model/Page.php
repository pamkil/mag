<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM {

    public function rules()
    {
        return array(
            'title' => array(
                array('not_empty'),
            ),
            'alias' => array(
                array('not_empty'),
                array('alpha_dash'),
                array(array($this, 'uniq_alias'), array(':value', ':field')),
            ),
            'text' => array(
                array('not_empty'),
            ),
        );
    }

    public function labels()
    {
        return array(
            'title' => 'Название',
            'alias' => 'Алиас',
            'text' => 'Текст',
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
        );
    }


    public function uniq_alias($value, $field)
    {
        $page = ORM::factory($this->_object_name)
                ->where($field, '=', $value)
                ->and_where($this->_primary_key, '!=', $this->pk())
                ->find();
        
        if ($page->pk())
        {
            return false;
        }
        
        
        return true;
    }
} 
