<?php

namespace app\models;

use yii\db\ActiveRecord;

class Tovar extends ActiveRecord
{
    public function rules()
    {
        return[
            [['nomi','narx','malumot'],'required'],
        ];
    }
    public function getCategory()
    {
        return $this->hasOne(Category::className());
    }

}