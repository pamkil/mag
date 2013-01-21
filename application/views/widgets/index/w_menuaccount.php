<h2>Меню</h2>
<div class="menu_links">
<?foreach ($menu as $name => $menu):?>
<?if(in_array($select, $menu)):?>
<?=HTML::anchor('account/'. $menu[0], $name, array('class' => 'select'))?>
<?else:?>
<?=HTML::anchor('account/'. $menu[0], $name)?>
<?endif?>
<?endforeach?>
<?=HTML::anchor('logout', 'Выход')?>
</div>
