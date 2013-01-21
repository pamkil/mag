<br/>
<?foreach($categories as $cat):?>
    <?=HTML::anchor('catalog/cat/c'. $cat->id . '', "<h4>$cat->title</h4>")?><br/>
<?endforeach?>
