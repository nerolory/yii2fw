<?php

/** @var $name string */

use yii\bootstrap\Html;
USE yii\helpers\Url;
?>

<h2><?= $name ?></h2>
<h2><?= Html::encode($name) ?></h2>
<h2><?= Html::decode(Html::encode($name)) ?></h2>
<h2><?= Html::beginTag('p') ?></h2>
Anna
<h2><?= Html::endTag('p') ?></h2>

<h3>Создание форм</h3>

<?= Html::beginForm('/#', 'post', ['class' => 'form']) ?>
<?= Html::input('text', 'name', 'Anna', ['class' => 'form-control']) ?>
<?= Html::button('отправить',['class' => 'btn btn-prinary'])?>
<?= Html::endForm()?>

<h2>Url</h2>

<?php
var_dump(Url::home());
var_dump(Url::to(['site/login', 'id' => 50, 'name' => 'Anna']));
?>
