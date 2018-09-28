<?php
/**
 * Created by PhpStorm.
 * User: bomb
 * Date: 20.09.18
 * Time: 20:57
 */


namespace frontend\models;
use yii\base\Model;

class Register extends Model {

    public $email;
    public $password;

    public function rules () {

        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
        ];

    }

}