<?php

namespace app\controllers;

use app\models\ReviewForm;
use yii\web\Controller;

class Lesson2Controller extends Controller
{
    public function actionIndex(){
        $time = time();
        return $this->render('index', ['time' => $time]);
    }

    public function actionReview(){
        //содаеми форму
        $model = new ReviewForm();
        return $this->render('review', [
            'model' => $model
        ]);
    }
}