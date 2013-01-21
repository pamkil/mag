<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<?=Form::open('admin/products/add', array('enctype' => 'multipart/form-data'))?>
<table width="100%" cellspacing="5" >

    <tr>
        <td ><?=Form::label('title', 'Название')?>: <br/><?=Form::input('title', $data['title'], array('size' => 80))?></td>
        <td rowspan="3" valign="top">
        <?=Form::label('cat', 'Категории')?>: <br/><br/><?=Form::select('cat[]', $cats, $data['cat'], array('multiple' => 'multiple', 'size' => 5))?><br/><br/>
        <?=Form::label('cost', 'Цена')?>: <br/><br/><?=Form::input('cost', $data['cost'], array('size' => 20))?> руб.<br/><br/>
        <?=Form::label('status', 'Статус')?>:<br/><br/><?=Form::checkbox('status', 1, true)?> Активен
        </td>
    </tr>
   
    <tr>
        <td><?=Form::label('description', 'Описание')?>: <br/><?=Form::textarea('description', $data['description'], array('cols' => 80, 'rows' => 20))?></td>
    </tr>
    <td>
            <br/>
            <?=Form::label('images', 'Загрузить изображения')?>: <br/><br/>
            <?=Form::file('images[]', array('id' => 'multi'))?>
        </td>

    <tr>
        <td align="center"><?=Form::submit('submit', 'Добавить')?></td>
    </tr>
</table>
<?=Form::close()?>
