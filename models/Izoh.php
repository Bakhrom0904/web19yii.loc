<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "izoh".
 *
 * @property int $id
 * @property string $fish
 * @property string $izoh_matn
 * @property int $sozlar_id
 *
 * @property Sozlar $sozlar
 */
class Izoh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'izoh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fish', 'izoh_matn', 'sozlar_id'], 'required'],
            [['sozlar_id'], 'integer'],
            [['fish'], 'string', 'max' => 255],
            [['izoh_matn'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fish' => 'Fish',
            'izoh_matn' => 'Izoh Matn',
            'sozlar_id' => 'Sozlar ID',
        ];
    }

    /**
     * Gets query for [[Sozlar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSozlar()
    {
        return $this->hasOne(Sozlar::className(), ['id' => 'sozlar_id']);
    }
}
