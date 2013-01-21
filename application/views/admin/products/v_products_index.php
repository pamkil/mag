<br/>
<table width="100%" border="0" class="tbl"  cellspacing="0">
    <thead>
        <tr height="30">
            <th>Название</th><th>Цена</th><th>Функции</th>
        </tr>
    </thead>
<? foreach ($products as $product):?>
<tr>
    <td ><?=HTML::anchor('admin/products/edit/'. $product->id, $product->title)?></td>
    <td width="100" align="center"><?=$product->cost?></td>
    <td width="100" align="center">
    <?=HTML::anchor('admin/products/edit/'. $product->id, HTML::image('media/img/edit.png'))?>

    <?=HTML::anchor('admin/products/delete/'. $product->id, HTML::image('media/img/delete.png'))?>

    </td>
</tr>
<? endforeach?>

</table>

<br/>
<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>

<?=HTML::anchor('admin/products/add', 'Добавить')?>
</p>