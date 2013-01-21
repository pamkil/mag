<?foreach($vendors as $i => $product):?>
    <div class="vendor floatleft">
        <?if ($i % 3 == 0):?>
        <?endif?>
        <div class="width100 center">
            <span class="vendor_title">
                <?=HTML::anchor("vendor/$product->id", $product->title)?>
            </span>
            <?if(strlen($product->image)>0):?>
                <?=HTML::anchor("vendor/$product->id",
                        HTML::image('media/uploads/' . $product->image, 
                        array('class' =>'vendor_img' ,'width' => '150')))?>
            <?else:?>
                <?=HTML::anchor("product/$product->id",
                    HTML::image('media/img/book.png', array('class' =>'product_img', 'width' => '150')))?>
            <?endif?>

        </div>
    </div>
<?endforeach?>
