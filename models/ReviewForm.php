<?php


namespace app\models;

use yii\base\Model;


class ReviewForm extends Model
{
    //поля
    public $title = 'название отзыва';
    public $content;
    public $email;

    //валидация правила
    public function rules()
    {
       return [
           [['title','content'], 'required'],//обязательны для заполнения поля,
           [['title','content','email'], 'string'], // поле это строка
            [['email'],'email'] // проверка на емайл
           ];
    }

    //название полей
    public function attributeLabels()
    {
        return [
            'title' => 'название отзыва',
            'content' => 'Текст',
            'email' => 'Адресс эл. почты'
        ];
    }


}