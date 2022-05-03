<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sozlar".
 *
 * @property int $id
 * @property string $sarlavha
 * @property string $matn
 *
 * @property Izoh $id0
 */
class Sozlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sozlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sarlavha', 'matn'], 'required'],
            [['sarlavha', 'matn'], 'string', 'max' => 200],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Izoh::className(), 'targetAttribute' => ['id' => 'sozlar_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sarlavha' => 'Sarlavha',
            'matn' => 'Matn',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Izoh::className(), ['sozlar_id' => 'id']);
    }
}
