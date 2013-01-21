<br/>
<?=HTML::anchor('catalog', '&larr; Вернуть в магазин')?>
<br/><br/>
<?if ($products != NULL):?>
<table width="100%" border="0" class="tbl"  cellspacing="0">
    <thead>
        <tr height="30">
            <th>Товар</th>
            <th>Кол-во</th>
            <th>Цена, руб.</th>
            <th>Сумма, руб.</th>
        </tr>
    </thead>
    <?foreach ($products as $product):?>
    <tr>
        <td><?=HTML::anchor('catalog/view/' . $product['id'], $product['title'])?></td>
        <td align="center">
            <div>
                
                <?=$product['count']?>
            </div>
        </td>
        <td align="center"><?=$product['cost']?></td>
        <td align="center"><?=($product['count'] * $product['cost'])?></td>
    </tr>
    <?endforeach?>
    <tr class="summ">
        <td align="right" colspan="3">Итого:</td>
        <td align="center"><?=$sum?></td>
    </tr>
</table>

<br/>
<p align="right"><?=HTML::anchor('cart/order', 'Оформить заказ &rarr;')?></p>

<?else:?>
    <div class="empty">Нет товаров в корзине</div>
<?endif?>