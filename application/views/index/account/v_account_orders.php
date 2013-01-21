<?if ($orders->count() > 0):?>
<table width="100%" border="0" class="tbl"  cellspacing="0">
    <thead>
        <tr height="30">
            <th>№</th>
            <th>Дата</th>
            <th>Способ доставки</th>
            <th>Стоимость, руб.</th>
            <th>Статус оплаты</th>
            <th>Статус доставки</th>
        </tr>
    </thead>
    <?foreach ($orders as $order):?>
    <tr>
        <td  align="center"><?=$order->id?></td>
        <td align="center"><?=$order->date?></td>
        <td align="center"><?=$order->delivery->name?></td>
        <td align="center"><?=$order->sum?></td>
        <td align="center"><?=$order->status_pay?></td>
        <td align="center"><?=$order->status_delivery?></td>
    </tr>
    <?endforeach?>
</table>

<?else:?>
    <div class="empty">У Вас нет заказов</div>
<?endif?>