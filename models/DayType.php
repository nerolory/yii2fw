<?php
/**
 * Created by PhpStorm.
 * User: Nerobianko
 * Date: 11.12.2018
 * Time: 1:11
 */

namespace app\models;

use yii\base\Model;


class DayType extends Model
{
    public $weekend;

    public function __construct(array $config = [])
    {
        $this->weekend = date('N') < 6 ? false : true;
        parent::__construct($config);
    }

    public function getDayTitle(){
        if($this->weekend) return "Выходной";
        return "Будний день";
    }
}