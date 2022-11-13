<?php

namespace app\models;
use yii\base\Model;

class SignupForm  extends CFormModel {

    public $username;
    public $password;

    public function rules(){
        return [
            [['username','password'],'required'],
        ];
    }

}