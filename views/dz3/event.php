<?php
/**
 * @var $title string тайтл страницы
 * @var $model \app\models\Calendar
 */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $title; // заголовок

// настраиваем ссылки в хлебной крошке
$this->params['breadcrumbs'][] = [
    'label' => 'ДЗ3',
    'url' => Url::toRoute('/dz3/')
];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<h3>Наименование события: <?= Html::encode($model->title) ?> </h3>
<p>Начало: <?= $model->getDateFormat('startDay') ?> </p>
<p>Окончание: <?= $model->getDateFormat('endDay') ?></p>
<p>Повторяемость: <?= $model->getBoolTitle('isRepeatable') ?></p>
<p>Блокирование: <?= $model->getBoolTitle('isBlocked') ?></p>
<p>Автор: <?= Html::encode($model->author) ?></p>
<p>Сообщение: <?= Html::encode($model->body) ?></p>
<?= Html::a('Изменить', ['/dz3/edit'], ['class' => 'btn btn-primary']) ?>
<?= Html::a('Вернуться', ['/dz3/'], ['class' => 'btn btn-primary', 'style' => ['margin-left' => '30px']]) ?>









