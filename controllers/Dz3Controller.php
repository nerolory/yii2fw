<?php

namespace app\controllers;

use app\models\Activity;
use app\models\Calendar;
use app\models\DayType;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\UploadedFile;

class Dz3Controller extends Controller
{
    public function actionIndex(){
        $model = new Activity();
        $day = new DayType();
        $lasturl = URL::previous();
        return $this -> render('index',[
           'model'=> $model,
           'daytype' => $day->getDayTitle(),
           'lasturl' => $lasturl
        ]);
    }
    public function actionCalendar(){
        return $this->render('calendar', ['title'=> 'Календарь']);
    }

    public function actionEvent(){
        $model = new Calendar();
        $model -> getExampleData();
        return $this->render('event', ['title'=>'просмотр событий', 'model'=>$model]);
    }

    public function actionCreate(){
        $model = new Calendar();
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->filesUpload = UploadedFile::getInstances($model, 'fileUpload');
            return $this->render('submit', ['title' => 'Подтверждение формы', 'model' =>$model]);
        } else {
            return $this->render('create', ['title' => 'Создание нового события', 'model' =>$model]);
        }
    }
}