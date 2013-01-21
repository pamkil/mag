<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open('admin/news/add')?>
<table width="100%" cellspacing="10">
    <tr>
        <td ><?=Form::label('title', 'Название')?>:</td>
        <td><?=Form::input('title', $data['title'], array('size' => 100))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('date', 'Дата')?>:</td>
        <td><?=Form::input('date', date('d.m.Y'), array('size' => 100))?></td>
    </tr>
    <tr>
        <td valign="top"><?=Form::label('intro', 'Вступительный текст')?>:</td>
        <td><?=Form::textarea('intro', $data['intro'], array('cols' => 100, 'rows' => 10))?></td>
    </tr>
    <tr>
        <td valign="top"><?=Form::label('content', 'Основной текст')?>: </td>
        <td><?=Form::textarea('content', $data['content'], array('cols' => 100, 'rows' => 20))?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><?=Form::submit('submit', 'Добавить')?></td>
    </tr>
</table>
<?=Form::close()?>
