<?foreach($products as $i => $product):?>
    <div class="product">
        <?if ($i % 3 == 0):?>
        <?endif?>
        <div class="width100 center">
            <span class="product_title">
                <?=HTML::anchor("product/$product->id", $product->title)?>
            </span>
            <?if(count($product->images->find_all()) > 0):?>
             <?=HTML::anchor("product/$product->id",
                        HTML::image('media/uploads/' . $product->main_img->name, 
                        array('class' =>'product_img' ,'width' => '150')))?>
            <?else:?>
             <?=HTML::anchor("product/$product->id",
                    HTML::image('media/img/book.png', array('class' =>'product_img', 'width' => '150')))?>
            <?endif?>
            <div class="product_fields">
                <span>
                    <?=$product->capacity?>
                </span>
                <span>ml</span>
            </div>
            <div class="product_price">
                <span>
                    <?=$product->cost?>
                </span>
            </div>
			<div>
				<?=HTML::image('media/img/buy.gif', array ('onclick' => "inc_ajax('$product->id')", 'class' => 'add_product'))?>
			</div>
            <div class="product_description">
                 <?=HTML::anchor("product/$product->id", 'Описание товара')?>
            </div>
        </div>
    </div>
<?endforeach?>