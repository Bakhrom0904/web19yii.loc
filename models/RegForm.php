<?php

namespace app\models;

use yii\base\Model;

class RegForm extends Model
{
public $login;
public $parol;
public $ism;
public function rules()
{
    return [
        [["login","parol"],"required"],
    ];
}
}

?>