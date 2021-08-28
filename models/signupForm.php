<?php

namespace app\models;

use yii\base\Model;


class SignupForm extends Model {
    public $username;
    public $password;
    public $password_repeat;


    public function rules()
    {
        return [
            [['username', 'password', 'password_repeat'], 'required'],
            [['username', 'password', 'password_repeat'], 'string', 'min'=> 4, 'max' => 16],
            [['password_repeat'], 'compare', 'compareAttribute' => 'password']
        ];
    }
    public function signup () {
        $user = new User();
        $user->username;
    }
}