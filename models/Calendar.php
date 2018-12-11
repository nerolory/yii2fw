<?php

namespace app\models;

use yii\base\Model;

class Calendar extends Model
{
    public $title;
    public $startDay;
    public $endDay;
    public $isBlocked;
    public $isRepeatable;
    public $author;
    public $body;
    public $fileUpload = [];

    public function attributeLabels()
    {
        return [
            'title'     => 'Название события',
            'startDay'  => 'Дата начала',
            'endDay'    => 'Дата завершения',
            'isRepeatable'  => 'повтор события',
            'author'  => 'Автор события',
            'body'  => 'Описание события',
            'fileUpload'  => 'Загрузка файлов'
        ];
    }

    public function rules()
    {
        return [
            [['title','author','body'], 'required', 'message' => 'Заполните форму'],
            [['startDay','endDay'], 'required'],
            [['isBlocked','isRepeatable'], 'boolean'],
            [['fileUpload'], 'file', 'maxFiles' => 10, 'extensions' => 'png,jpg']
        ];
    }

    public function getBoolTitle($arg){
        return ($this->$arg) ? 'да' : 'нет';
    }


    public function getDateFormat($arg){
        return Date('Y,m,d H:i',$this->$arg);
    }

    public function getExampleData(){
        $this->title = 'Сщбытие';
        $this->startDay = time();
        $this->endDay = time()+1440*60;
        $this->isRepeatable = true;
        $this->isBlocked = false;
        $this->author = 'пользователь';
        $this->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce viverra odio massa, non egestas purus faucibus in.';
    }

    public function getUploadedFileName(){
        if(empty($this->filesUpload)) return "Отсутствцет";

        $arr = [];
        foreach($this->fileUpload as $files){
            $arr[] = $files->getBaseName() . '.' . $files->getExtension();
        }
        return implode(', ', $arr);
    }
}