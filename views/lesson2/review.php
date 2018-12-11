<?php
/** @var $model \app\models\ReviewForm */
use yii\widgets\ActiveForm;
use yii\bootstrap\Html;
?>
<h1>форма для отзыва</h1>
<div class="lesson2-review">
    <?php
    $form = ActiveForm::begin([
        //'id'=>'lesson2-review'
    ]);
    ?>
    <?= $form->field($model,'title')->textInput()?>
    <?= $form->field($model,'content')->textarea()?>
    <?= $form->field($model,'email')->textInput(['type' =>'email'])?>
    <div class="form-group">
        <?=Html::submitButton('Отправить отзыв',['class'=>'btn btn-success'])?>
    </div>
    <?php ActiveForm::end();?>
</div>