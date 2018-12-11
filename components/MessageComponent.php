<?php
/* @var $this \yii\web\View */

namespace app\components;

use yii\base\Component;
use yii\helpers\Html;
use yii\swiftmailer\Message;

class MessageComponent extends Component
{
    public $message;

    public function init(){
        parent::init();
        $this->message = 'текст сообщения';
    }
    public function display($text = ''){
        if(!empty($text)){
            $this->message = $text;
        }
        return Html::encode($this->message);
    }
}