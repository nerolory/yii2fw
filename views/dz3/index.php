<?php

/** @var $model app\models\Activity */

use yii\helpers\Html;
?>

<h2>Последняя посещенная страница</h2>
<?=$lasturl ?>
<br>
<h1>Активность: <?=$model->title?></h1>

<?php if($model->startDay==$model->endDay):?>
    <p>Событие на <?=date('d.m.Y',$model->startDay);?></p>
<?php else: ?>
    <p>Событие c <?=date('d.m.Y',$model->startDay)?> по <?=date('d.m.Y',$model->endDay)?></p>
<?php endif; ?>
<?="<div>Сегодня: $daytype </div>" ?>
<h3><?=$model->getAttributeLabel('body') ?></h3>
<div><?=$model->body ?></div>
<br>
<label>
    <?=$model-> getAttributeLabel('isRepeatable')?>
    <input type="checkbox" checked>
</label>
<?= Html::a('Календарь', ['/dz3/calendar'], ['class' => 'btn btn-primary', 'style' => ['margin-left' => '30px']]) ?>

