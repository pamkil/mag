<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open('login')?>
<table width="300" cellspacing="5">
    <tr>
        <td ><?=Form::label('username', 'Логин')?>:</td>
        <td><?=Form::input('username', $data['username'], array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('password', 'Пароль')?>:</td>
        <td><?=Form::password('password', $data['password'], array('size' => 20))?></td>
    </tr>
    <tr>
        <td></td>
        <td "><?=Form::checkbox('remember')?> Запомнить<br/><br/></td>
    </tr>

    <tr>
        <td align="center"><?=Form::submit('submit', 'Войти')?></td>
        <td><?=HTML::anchor('register', 'Регистрация')?></td>
    </tr>
</table>
<?=Form::close()?>