<?php
/** @var $model app\models\Activity */

use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$this->title = $title;

$this->params['breadcrumbs'][] = [
    'label' => 'ДЗ3',
    'url' => Url::toRoute('/dz3/')
];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?=Html::encode($this->title) ?></h1>

<div class="form-review">
    <?php
        $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
    ?>
    <?=$form->field($model, 'title') ?>
    <?=$form->field($model, 'startDay') ?>
    <?=$form->field($model, 'endDay') ?>
    <?=$form->field($model, 'isRepeatable')->checkbox() ?>
    <?=$form->field($model, 'isBlocked')->checkbox() ?>
    <?=$form->field($model, 'author') ?>
    <?=$form->field($model, 'body') ?>
    <?=$form->field($model, 'fileUpload[]')->fileInput(['multiple'=>'multiple']) ?>

    <div class="form-group">
        <?=Html::resetButton('сбросить',['class'=>'btn'])?>
        <?=Html::submitButton('Создать',['class'=>'btn btn-primary'])?>
    </div>
    <?php ActiveForm::end();?>
</div>
