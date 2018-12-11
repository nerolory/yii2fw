<?php

namespace app\controllers;

use app\models\Activity;
use app\models\DayEvent;
use yii\helpers\Url;
use yii\web\Controller;
class Dz2Controller extends Controller
{
    public function actionIndex()
    {
        Url::remember();
        $model = new Activity();

        return $this->render('index',[
            'model'=>$model
        ]);
    }

    public function actionRemember()
    {
        $url = Url::previous();

        time();

        return $this->render('remember',[
            'url'=>$url
        ]);
    }
}