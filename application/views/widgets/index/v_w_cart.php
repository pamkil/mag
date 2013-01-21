<div id="small_cart" class="cart">
    <a href="/cart">
	<?=HTML::image('media/img/cart.png', array('width' => '50'))?><br/>
        <? if ($count <= 0):?>
            <h3 >Ваша корзина пуста</h3>
        <?else:?>
            <h3 >В корзине <?=$count?> товара(ов)</h3>
        <?endif?>
    </a>
</div>