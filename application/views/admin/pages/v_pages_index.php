<?if($pages->count() > 0):?>
<br/>
<table width="100%" border="0" class="tbl"  cellspacing="0">
    <thead>
        <tr height="30">
            <th>Алиса</th>
            <th>Название</th>
            <th>Функции</th>
        </tr>
    </thead>
<? foreach ($pages as $page):?>
<tr>
    <td width="200" align="center" ><?=$page->alias?></td>
    <td ><?=HTML::anchor('admin/pages/edit/'. $page->id, $page->title)?></td>
    <td width="100" align="center">

    <?=HTML::anchor('page/'. $page->alias, HTML::image('media/img/see.png'), array('target' => '_blank'))?>
    
    <?=HTML::anchor('admin/pages/edit/'. $page->id, HTML::image('media/img/edit.png'))?>

    <?=HTML::anchor('admin/pages/delete/'. $page->id, HTML::image('media/img/delete.png'))?>

</td>
</tr>
<? endforeach?>

</table>

<?else:?>
<p align="center">Нет страниц</p>
<?endif?>

<br/>
<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>

<?=HTML::anchor('admin/pages/add', 'Добавить')?>
</p>

