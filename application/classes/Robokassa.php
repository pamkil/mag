<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Класс для оплаты через Robokassa.ru
 */

class Robokassa {

    public $login;
    private $password1;
    private $password2;
   
    public static function factory($login = null, $password1 = null, $password2 = null)
    {
        return new Robokassa($login, $password1, $password2);
    }

    function __construct($login = null, $password1 = null, $password2 = null)
    {
        $this->login = $login;
        $this->password1 = $password1;
        $this->password2 = $password2;
    }

    function get_link($summa, $desc, $inv_id, $encoding = 'utf-8', $currency = 'PCR', $language = 'ru')
    {
        $mrch_login =  $this->login;
        $signature_value = $this->create_crc($summa, $inv_id);
        $host_test = 'http://test.robokassa.ru/Index.aspx';
        $host = 'https://merchant.roboxchange.com/Index.aspx';

        $link = "$host_test?MrchLogin=$mrch_login&Desc=$desc&OutSum=$summa&InvId=$inv_id&SignatureValue=$signature_value&IncCurrLabel=$currency&Culture=$language&Encoding=$encoding";
        return $link;
    }

    function create_crc($summa, $idOrder)
    {
        $crc = $this->login.':'. $summa.':'. $idOrder.':'. $this->password1;
        return md5($crc);
    }

    function is_payed()
    {
        return $this->_check_crc($this->password1);
    }
    function is_ordered()
    {
        return $this->_check_crc($this->password2);
    }

    function get_summa()
    {
        return @$_REQUEST["OutSum"];
    }
    function get_id_order()
    {
        return @$_REQUEST["InvId"];
    }
    function get_crc()
    {
        return @$_REQUEST["SignatureValue"];
    }

    private function _check_crc($password)
    {
        $summa = $this->get_summa();
        $idOrder = $this->get_id_order();
        $crc = $this->get_crc();

        $crc = strtoupper($crc);

        $my_crc = $summa.':'.$idOrder.':'.$password;
        $my_crc = strtoupper(md5($my_crc));

        return ($my_crc == $crc)? true : false;
    }

}
