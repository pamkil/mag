<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Верхнее меню"
 */
class Controller_Widgets_Index_WAlphabar extends Controller_Widgets {
    
    public $template = 'widgets/index/v_w_alphabar';

    public function action_index()
    {
        //строим алфавит
        foreach(range(ord('A'), ord('Z')) as $v)
        {
            $alphabet[] = chr($v);
        }
        
        //Получаем параметр из адресной строки (текущая буква)
         $char_select = '';
        $param = Request::initial()->param('id');
        if ($param)
        {
            if ( preg_match("/^[a-z]{1}$/", $param))
            {
                $char_select = $param;
            }
        }

        // Вывод в шаблон
        $this->template->alphabet = $alphabet;
        $this->template->char_select = $char_select;
    }

}