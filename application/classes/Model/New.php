<?php defined('SYSPATH') or die('No direct script access.');

class Model_New extends ORM {

   public function rules()
    {
        return array(
            'title' => array(
                array('not_empty'),
            ),
            'intro' => array(
                array('not_empty'),
            ),
            'content' => array(
                array('not_empty'),
            ),
            'date' => array(
                array('not_empty'),
                array('date'),
            )
        );
    }

    public function labels()
    {
        return array(
            'title' => 'Название',
            'date' => 'Дата',
            'intro' => 'Вступительный текст',
            'content' => 'Основной текст',
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
} 
