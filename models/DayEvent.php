<?php

namespace app\models;


use yii\base\Model;

class DayEvent extends Model
{
    public $workday;
    public $holiday = true;
    public  $event;

    public function attributeLabels()
    {
        return [
            'workday' => 'рабочий день',
            'holiday' => 'выходной день',
            'event'   => 'Сообщение'
        ];
    }
}