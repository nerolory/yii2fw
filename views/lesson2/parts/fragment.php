<h3>фрагмент fragment</h3>
<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, illo?</h1>

<p><?=$data?></p>
<?php
    Yii::setAlias('@one','@app/path/to/one');
?>
<ul>
    <li>@app - root каталога: <?=Yii::getAlias('@app')?></li>
    <li>@yii - каталог yii-файлов: <?=Yii::getAlias('@yii')?></li>
    <li>@runtime - каталог отладочной информации: <?=Yii::getAlias('@runtime')?></li>
    <li>@vendor - каталог зависимостей проекта: <?=Yii::getAlias('@vendor')?></li>
    <li>@webroot - каталог web : <?=Yii::getAlias('@webroot')?></li>
    <li>@bower - каталог зависимостей bower : <?=Yii::getAlias('@bower')?></li>
    <li>@npm - каталог зависимостей npm : <?=Yii::getAlias('@npm')?></li>
    <li>@one - каталог созданного алиса : <?=Yii::getAlias('@one')?></li>
</ul>