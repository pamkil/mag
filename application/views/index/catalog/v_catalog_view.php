<br/>
<table width="100%" border="0" cellpadding="10" cellspacing="10">
    <td width="100" align="center" valign="top">
        <?if(count($images) > 0):?>
            <div id="main_icon">
            <?=HTML::anchor('media/uploads/'. $product->main_img->name, HTML::image('media/uploads/' . $product->main_img->name, array('width' => '150')), array('target' => '_blank'))?>
            </div>
			
            <table align="center" width="100" border="0" class="images_icon" >
                <tr align="center">
                    <?foreach($images as $image):?>
                    <td><?=HTML::image('media/uploads/' . $image->name, array('width' => '50', 'class' => 'icon'))?></td>
                    <?endforeach?>
                </tr>
            </table>
        <?else:?>
        <div id="main_icon">
            <?=HTML::image('media/img/book.png', array('width' => '150'))?>
        </div>
         <?endif?>
		  <span >в корзину</span> 
        <div class="cost"><?=$product->cost?> руб. </div>
        <?//=HTML::anchor('cart/add/'. $product->id, HTML::image('media/img/buy.gif'))?>
		<?//=HTML::anchor('#', , )?>
			
		<div>
			<?=HTML::image('media/img/buy.gif', array ('onclick' => "inc_ajax('$product->id')", 'class' => 'add_product'))?>
		</div>
    </td>
    <td align="left" valign="top">
        <p><?=$product->description?></p>
    </td>
</table>
<br/>


<h3>Отзывы:</h3>
<? if (count($comments) > 0):?>
<?foreach($comments as $comment):?>
<div class="box">
    <h4><?=$comment->name?></h4>
    <p><?=$comment->text?></p>
</div>
<?endforeach?>
<?else:?>
<div class="box">Нет отзывов</div>
<?endif?>