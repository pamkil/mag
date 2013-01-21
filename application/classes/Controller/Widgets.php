<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс виджетов
 */
class Controller_Widgets extends Controller_Template {

    public function  before() {
        if(Request::initial() === Request::current())   //Если запрос введен в адресной строке
            $this->redirect(URL::site());               //то переходим на главную страницу
        parent::before();
         
//        if(Request::current()->is_initial())
//        {
//            if(Request::initial() === Request::current())   //Если запрос введен в адресной строке
//            $this->redirect(URL::site());
//            //$this->auto_render = FALSE;
//        }
        
    }

}
