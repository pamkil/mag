<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open('admin/pages/add')?>
<table width="100%" cellspacing="5">

     <tr>
        <td ><?=Form::label('alias', 'Алиас')?>:</td>
        <td><?=URL::base('http')?>page/ <?=Form::input('alias', $data['alias'], array('size' => 20))?></td>
    </tr>

    
    <tr>
        <td ><?=Form::label('title', 'Название')?>:</td>
        <td><?=Form::input('title', $data['title'], array('size' => 100))?></td>
    </tr>
   
    <tr>
        <td valign="top"><?=Form::label('text', 'Текст')?>: </td>
        <td><?=Form::textarea('text', $data['text'], array('cols' => 100, 'rows' => 20))?></td>
    </tr>
     <tr>
        <td valign="top"><?=Form::label('status', 'Статус')?>:</td>
        <td><?=Form::checkbox('status', 1, true)?> Активен</td>
    </tr>
    <tr>
        <td colspan="2" align="center"><?=Form::submit('submit', 'Добавить')?></td>
    </tr>
</table>
<?=Form::close()?>
