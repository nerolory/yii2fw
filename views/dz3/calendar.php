<?php

use yii\helpers\Html;
$this->title=$title;

$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Список задач на день</h1>
<p>Тестовое событие</p>

<?= Html::a('Первое событие', ['/dz3/event'], ['class' => 'btn btn-primary', 'style' => ['margin-left' => '30px']]) ?>
<?= Html::a('Создать', ['/dz3/create'], ['class' => 'btn btn-primary', 'style' => ['margin-left' => '30px']]) ?>

