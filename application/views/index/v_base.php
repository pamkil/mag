<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title><?=$site_name?> | <?=$title?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name='description' content='<?=$description?>'>
    <meta name='keywords' content='<?=$content_description?>'>
    <link href='/media/img/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link rel='stylesheet' href='main.css' type='text/css'>

    <?foreach ($styles as $file_style):?>
        <?=HTML::style($file_style)?>
    <?endforeach?>

    <?foreach ($scripts as $file_script):?>
        <?=HTML::script($file_script)?>
    <?endforeach?>
</head>

<body>
    <div id="wrapper">
        <div id="contaner">
            <div id="header">
                <div id="headerbar">
                    <a> 
                        <img src="/media/img/logo.png" alt="Логотип Jolie74" width="430px" height="150px">
                    </a>			
                </div>
            </div>
            
            <div id="cart" class="grid-block outer">
                <div class="module mod-line mod-transparent -dockcart deepest">
                    <div class="moduletable-dockcart">
                        <div style="position:absolute;left:-5000px;">: 
                        </div>
                        <div style="position:relative;">
                            <?=$cart?>
                        </div>
                        <noscript>
                            
                                <style type="text/css">
                                    .module-dockcart {height: 100%; overflow: visible;}
                                    #dockcart {height: 0px; overflow: hidden;}
                                </style>
                            
                        </noscript>
                    </div>
                </div>
            </div>
            
            <div id="block-main">
                <div class="floatleft width70">
                
                    <?//Меню?>
                    <?if (isset($block_menu)):?>
                        <? foreach ($block_menu as $mnblock):?>
                            <?=$mnblock?>
                        <?endforeach?>
                        <div class="clear"></div>
                    <?endif?>
                    <?//Конец Меню?>

                    <div id="innertop">
                        <?//внутренний верхний?>
                        <?if (isset($block_innertop)):?>
                            <? foreach ($block_innertop as $mnblock):?>
                                <?=$mnblock?>
                            <?endforeach?>
                            <div class="clear"></div>
                        <?endif?>
                        <?//Конец внутренний верхний?>
                    </div>

                    <?//Центральный блок?>
                    <?if (isset($block_center)):?>
                        <? foreach ($block_center as $cblock):?>
                            <?=$cblock?>
                        <?endforeach?>
                        <div class="clear"></div>
                    <?endif?>
                    <?// Конец Центральный блок?>

    <!--                <div id="content">
                    </div>-->
                </div>  
                <div id="sidebar-r" class="width30 floatleft" >
                    <?if (isset($block_sidebar_r)):?>
                        <? foreach ($block_sidebar_r as $block):?>
                            <?=$block?>
                        <?endforeach?>
                        <div class="clear"></div>
                    <?endif?>
                    <div class="grid-box width100">
                        <div class="module">
                            
                        </div>
                    </div>
                    
                    <div class="grid-box width100">
                        <div class="module">
                            
                        </div>
                    </div>
                    
                    <div class="grid-box width100">
                        <div class="module">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
         
        <!--<div id="empty"></div>-->
    </div>

    <div id="footer">
        <hr>
        <p style="padding-top:5">Мой сайт footer</p>
    </div>

</body>
</html>