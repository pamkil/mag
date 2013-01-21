<br/>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<br/>
<?=Form::open('admin/categories')?>
<select name="cat">
    <option value="">
        < Выберите категорию >
    </option>
    <?foreach ($categories as $cat):?>
        <option value="<?=$cat->id?>">
            <?=str_repeat('&nbsp;', 2 * $cat->lvl) . $cat->title ?>
        </option>
    <?endforeach?>
</select>
<?=Form::input('title', null, array('size' => 50))?>
<?=Form::submit('add', 'Добавить')?>
<?=Form::submit('delete', 'Удалить')?>
<?=Form::close()?>