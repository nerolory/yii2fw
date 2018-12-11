<?php

/* @var $arrayCar[] */
/* @var $arrayBooks[] */

use yii\helpers\ArrayHelper;

//получение данных

//по старинке

$modelName = isset($arrayCar['year']['now']->model) ? $arrayCar['year']['now']->model : null;

//С использованием arrayHelper

$modelName2 = ArrayHelper::getValue($arrayCar, 'year.now.model');
?>
<p>Модель авто 1 <?= $modelName  ?></p>
<p>Модель авто 2 <?= $modelName2 ?></p>

<?php
    //запись в массив
        $arrayCar['time'] = time('h:i:s');
        ArrayHelper::setValue($arrayCar,'year.now.date', date( 'i.m.Y'));
        print_r($arrayCar);
        echo  "<br>";
    //Удаление из массива
        ArrayHelper::remove($arrayCar,'time');
        print_r($arrayCar);
        echo  "<br>";

    //Проверка ключа в массиве на существование
        $arrayCar['time'] = time('h:i:s');
        var_dump(ArrayHelper::keyExists('time',$arrayCar));
        echo  "<br>";
        var_dump(ArrayHelper::keyExists('time2',$arrayCar));
        echo  "<br>";

    //получение данных одного столбца
        $idAll = ArrayHelper::getColumn($arrayBooks, 'id');
        print_r($idAll);
        echo  "<br>";
    //Переиндексация массива
        $reIndex = ArrayHelper::index($arrayBooks, 'id');
        print_r($reIndex);
        echo  "<br>";

    //map() - работа с парами ключ-значение
        $map = ArrayHelper::map($arrayBooks, 'id', 'name');
        print_r($map);
        echo  "<br>";
    //multisort
        ArrayHelper::multisort($arrayBooks, ['name', 'id'], [SORT_ASC, SORT_DESC]);
        print_r($arrayBooks);
        echo  "<br>";
    //Определение типа массива
        var_dump(ArrayHelper::isIndexed([1,2,3]));
echo  "<br>";
        var_dump(ArrayHelper::isIndexed(['my' => 'my2']));
echo  "<br>";
        var_dump(ArrayHelper::isAssociative([1,2,3]));
echo  "<br>";
        var_dump(ArrayHelper::isAssociative(['my' => 'my2']));
echo  "<br>";
echo  "<br>";



    //encode-decode
        var_dump(ArrayHelper::htmlEncode($arrayBooks));
echo  "<br>";
        var_dump(ArrayHelper::htmlDecode($arrayBooks));