<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class FikrForm extends Model
{
public $ism;
public $sarlavha;
public $matn;
public $foto;
public function attributeLabels()
{
    return [
        "matn"=>"Fikringiz",
        "sarlavha"=>"Sarlavha malumoti",
    ];
}
public function rules()
{
    return [
        ["ism","required"],
        ['foto','file','extensions'=>"jpg,png,bmp"],
    ];
}

}