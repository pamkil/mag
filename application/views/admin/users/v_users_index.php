<br/>
<table width="100%" border="0" class="tbl"  cellspacing="0">
    <thead>
        <tr height="30">
            <th>E-mail</th>
            <th>Логин</th>
            <th>ФИО</th>
            <th>Роли</th>
            <th>Функции</th>
        </tr>
    </thead>
<? foreach ($users as $user):?>
<tr>
    <td width="150" align="center" ><?=$user->email?></td>
    <td width="100" align="center"><?=$user->username?></td>
    <td><?=$user->first_name?></td>
    <td align="center">
        <?foreach($user->roles->find_all() as $role):?>
            <?=$role->description?><br/>
        <?endforeach?>
    </td>
    <td width="100" align="center">
        <?=HTML::anchor('admin/users/edit/'. $user->id, HTML::image('media/img/edit.png'))?>

        <?=HTML::anchor('admin/users/delete/'. $user->id, HTML::image('media/img/delete.png'))?>
    </td>
</tr>
<? endforeach?>

</table>

<?=$pagination?>


