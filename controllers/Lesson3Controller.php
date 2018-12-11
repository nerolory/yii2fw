<?php

namespace app\controllers;

use app\models\Car;
use app\models\ReviewForm;
use Yii;
use yii\web\Controller;


class Lesson3Controller extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionArrayHelper(){
        $arrayCar = [
            'year' => [
                'now' => new Car()
            ]
        ];

        $arrayBooks = [
            ['id' => '1', 'name' => 'yii2 framework <b>new</b>', 'pages' => 500],
            ['id' => '2', 'name' => 'php 11', 'pages' => 300],
            ['id' => '3', 'name' => 'html', 'pages' => 200],
            ['id' => '4', 'name' => 'js', 'pages' => 400]
        ];

        return $this->render('array-helper', [
            'arrayCar' => $arrayCar,
            'arrayBooks' => $arrayBooks
        ]);
    }
    public function actionHelpers(){
        return $this->render('helpers', ['name'=> 'User: <strong> Anna </strong>']);
    }


    public function actionFormReview()
    {
        $model = new ReviewForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }
        return $this->render('form-review', [
            'model' => $model,
        ]);
    }


}