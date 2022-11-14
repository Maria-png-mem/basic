<?php

namespace app\models;
use yii\base\Model;

class SignupForm extends Model {

    public $username;
    public $password;
    public $group_id;

    public function rules(){
        return [
            [['username','password'],'required'],
            [['group_id'],'integer'],
             [['username'],'unique', 'targetClass' => User::class, 'targetAttribute' => 'username'],
             [['password'],'unique', 'targetClass' => User::class, 'targetAttribute' => 'password']



        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'ИМЯ',
            'password' => 'пАРОЛЬ',
            'group_id' => 'Группа',


        ];
    }

}