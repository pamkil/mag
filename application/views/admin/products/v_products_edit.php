<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open('admin/products/edit/' . $id,  array('enctype' => 'multipart/form-data'))?>
<table width="100%" cellspacing="5">
    <tr>
        <td ><?=Form::label('title', 'Название')?>: <br/><?=Form::input('title', $data['title'], array('size' => 80))?></td>
        <td rowspan="3" valign="top">
        <?=Form::label('cat', 'Категории')?>: <br/><br/><?=Form::select('cat[]', $cats, $data['cat'], array('multiple' => 'multiple', 'size' => 5))?><br/><br/>
        <?=Form::label('cost', 'Цена')?>: <br/><br/><?=Form::input('cost', $data['cost'], array('size' => 20))?> руб.<br/><br/>
        <?=Form::label('status', 'Статус')?>:<br/><br/><?=Form::checkbox('status', 1, (bool) $data['status'])?> Активен
        </td>
    </tr>

    <tr>
        <td><?=Form::label('description', 'Описание')?>: <br/><?=Form::textarea('description', $data['description'], array('cols' => 80, 'rows' => 20))?></td>
    </tr>
    <tr>
        <td>
            <br/>
            <?=Form::label('images', 'Загрузить изображения')?>: <br/><br/>
            <?=Form::file('images[]', array('id' => 'multi'))?>
        </td>
    </tr>
    <tr>
        <td align="center"><?=Form::submit('submit', 'Сохранить')?></td>
    </tr>
    <tr>
        <td>
            <?=Form::label('images', 'Изображения')?>: <br/><br/>
            <?if (!empty($data['images'])):?>
<a name="img"></a>
            <table width="100%" cellspacing="20">
                <tr>
                <?foreach($data['images'] as $i =>  $image):?>
                    <td align="center"><?=HTML::anchor('media/uploads/'. $image->name, HTML::image('media/uploads/small_' . $image->name), array('target' => '_blank'))?>
                        <br><?=HTML::anchor('admin/products/delimg/' . $image->id, 'Удалить')?> | 
                        <?if ($image->id != $data['image_id'] ):?>
                        <?=HTML::anchor('admin/products/mainimg/' . $image->id, 'Главная')?>
                        <?else:?>
                        Главная
                        <?endif?>
                    </td>
                    <?if ($i % 2):?>
                        </tr><tr>
                    <?endif?>
                <?endforeach?>
                </tr>
            </table>

            <?else:?>
            <div class="empty">Нет изображений</div>
            <?endif?>
        </td>
    </tr>
</table>
<?=Form::close()?>
