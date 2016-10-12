<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 12.10.2016
 * Time: 11:35
 */

namespace app\models;


use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules(){
        return [
            ['name','required'], // можно передавать много имен параметров (в массиве), но лишь одно свойство
            ['email','email']
        ];
    }
}