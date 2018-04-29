<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "apteka".
 *
 * @property int $id
 * @property string $nomi
 * @property string $manzili
 * @property int $meneger
 *
 * @property User $meneger0
 * @property Buyurtma[] $buyurtmas
 */
class Apteka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apteka';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomi', 'manzili', 'meneger'], 'required'],
            [['manzili'], 'string'],
            [['meneger'], 'integer'],
            [['nomi'], 'string', 'max' => 300],
            [['meneger'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['meneger' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Nomi',
            'manzili' => 'Manzili',
            'meneger' => 'Meneger',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeneger0()
    {
        return $this->hasOne(User::className(), ['id' => 'meneger']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuyurtmas()
    {
        return $this->hasMany(Buyurtma::className(), ['aptekaId' => 'id']);
    }
}
