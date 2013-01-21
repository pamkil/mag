<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open('admin/users/edit/'. $user->id)?>
<table width="300" cellspacing="5">
    <tr>
        <td ><?=Form::label('username', 'Логин')?>:</td>
        <td><?=Form::input('username', $user->username, array('size' => 30))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('first_name', 'ФИО')?>:</td>
        <td><?=Form::input('first_name', $user->first_name, array('size' => 30))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('email', 'Email')?>:</td>
        <td><?=Form::input('email', $user->email, array('size' => 30))?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><?=Form::submit('submit', 'Сохранить')?></td>
    </tr>
</table>
<?=Form::close()?>