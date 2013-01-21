<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open('register')?>
<table width="300" cellspacing="5">
    <tr>
        <td ><?=Form::label('username', 'Логин')?>:</td>
        <td><?=Form::input('username', $data['username'], array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('first_name', 'ФИО')?>:</td>
        <td><?=Form::input('first_name', $data['first_name'], array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('email', 'Email')?>:</td>
        <td><?=Form::input('email', $data['email'], array('size' => 20))?></td>
    </tr>
     <tr>
        <td ><?=Form::label('password', 'Пароль')?>:</td>
        <td><?=Form::password('password', $data['password'], array('size' => 20))?></td>
    </tr>
     <tr>
        <td ><?=Form::label('password_confirm', 'Повторить пароль')?>:</td>
        <td><?=Form::password('password_confirm', $data['password_confirm'], array('size' => 20))?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><?=Form::submit('submit', 'Зарегистрироваться')?></td>
    </tr>
</table>
<?=Form::close()?>