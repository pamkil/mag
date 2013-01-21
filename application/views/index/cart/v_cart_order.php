<br/><br/>
<h4>Шаг 1. Выберите способ доставки:</h4>
<br/>
<?=Form::open('cart/payment')?>
    <?foreach ($delivery as $d):?>
        <?=Form::radio('delivery', $d->id)?> 
        <?=Form::label('delivery', $d->name . ' - ' . $d->cost . ' руб.')?><br/>
        <p><?=$d->description?></p><br/>
    <?endforeach?>
    
    <br/>
    
    <h4>Шаг 2. Укажите адрес доставки:</h4><br/>
    <?=Form::textarea('address', $user->address, array('cols' => '100'))?>
    
    <br/><br/>
    
    <p align="center"><?=form::submit('pay', 'Перейти к оплате')?></p>
<?=Form::close()?>

