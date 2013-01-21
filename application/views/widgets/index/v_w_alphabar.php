<div id="alphabar" class="module">
    <div id="alphabar-nav">
        <ul class="alphabar-list">
            <?foreach ($alphabet as $char):?>
                <?if($char == $char_select):?>
                    <li class="alpha-select">
                <?else:?>
                    <li>
                <?endif?>
                        <?=HTML::anchor('vendor/'. $char, "<span>$char</span>")?>
                    </li>
            <?endforeach?>
        </ul>
        <div class="clear"></div>
    </div>
</div>