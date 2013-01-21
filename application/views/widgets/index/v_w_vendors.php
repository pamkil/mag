<div class="width100 center floatleft">
    <div class="module">
        <h3> <?=$heading?></h3>
        <div class="vendors">
            <ul class="listvendors">
                <?foreach($vendors as $i => $product):?>
                    <li>
                         <?=HTML::anchor("vendor/$product->id", $product->title)?>
                    </li>
                <?endforeach?>
            </ul>
        </div>
    </div>
</div>
