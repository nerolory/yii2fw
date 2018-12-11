<?php
namespace app\models;

use yii\base\Model;

/**
* Activity класс
*
* Отражает сущность хранимого в календаре события
*/
class Activity extends Model
{
    public $title;
    public $startDay;
    public $endDay;
    public $isBlocked;
    public $isRepeatable;
    public $author;
    public $body;

    public function __construct(array $config = [])
    {
        $this->startDay = time();
        $this->endDay = time()+1440*60;
        parent::__construct($config);
    }

    public function attributeLabels()
    {
        return [
            'title'     => 'Название события',
            'startDay'  => 'Дата начала',
            'endDay'    => 'Дата завершения',
            'isRepeatable'  => 'повтор события',
            'author'  => 'Автор события',
            'body'  => 'Описание события'
        ];
    }
    public function rules()
    {
        return [
            ['title','author','body'], 'required'
            //Чисто для примера самой функции rulls, ибо я не понял какие правила тут могут быть ещё применены.
        ];
    }

}