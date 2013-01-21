<br/>
<h4><?=$user->first_name?>, давайте всё проверим, прежде чем перейти к оплате.</h4>
<br/>
<table width="100%" cellspacing="20" >
    <tr>
        <td >Способ доставки: </td>
        <td width="85%"><?=$delivery?></td>
    </tr>
    <tr>
        <td>Адрес получателя:</td>
        <td><?=$address?></td>
    </tr>
    <tr>
        <td>Стоимость заказа: </td>
        <td><?=$cost_order?> руб.</td>
    </tr>
    <tr>
        <td>Стоимость доставки:</td>
        <td><?=$cost_delivery?> руб.</td>
    </tr>
    <tr>
        <td>Всего к оплате:</td>
        <td><h4><?=($cost_order + $cost_delivery)?> руб.</h4></td>
    </tr>
</table>
<?=form::open('payment')?>
<center><?=form::submit('pay', 'Оплатить')?></center>
<?=form::close()?>