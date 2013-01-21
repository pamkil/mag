<div id="menubar">
    <div id="menu-nav">
        <ul class="menu">
            <?foreach ($menu as $name => $items_menu):?>
                <?if('index' == $select):?>
                    <li class="menu-select">
                <?else:?>
                    <li>
                <?endif?>
                <?if($name === 'Главная'):?>
                    <?=HTML::anchor('/', "<span>$name</span>")?>
                    </li>
                <?else:?>
                    <?foreach ($items_menu as $i_menu):?>
                        <?if($i_menu->title == $select):?>
                            <li class="menu-select">
                        <?else:?>
                            <li>
                        <?endif?>

                        <?=HTML::anchor('catalog/cat/c'. $i_menu->id, "<span>$i_menu->title</span>")?>
                        <?if( $i_menu->lvl > 0):?>

                        <?endif?>
                        </li>
                    <?endforeach?>
                <?endif?>
            <?endforeach?>
        </ul>
        <div class="clear"></div>
    </div>
</div>