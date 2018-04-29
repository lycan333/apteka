<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "buyurtma".
 *
 * @property int $id
 * @property int $doriId
 * @property int $soni
 * @property int $aptekaId
 *
 * @property Dori $dori
 * @property Apteka $apteka
 */
class Buyurtma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'buyurtma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['doriId', 'aptekaId'], 'required'],
            [['doriId', 'soni', 'aptekaId'], 'integer'],
            [['doriId'], 'exist', 'skipOnError' => true, 'targetClass' => Dori::className(), 'targetAttribute' => ['doriId' => 'id']],
            [['aptekaId'], 'exist', 'skipOnError' => true, 'targetClass' => Apteka::className(), 'targetAttribute' => ['aptekaId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'doriId' => 'Dori ID',
            'soni' => 'Soni',
            'aptekaId' => 'AptekaSearch ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDori()
    {
        return $this->hasOne(Dori::className(), ['id' => 'doriId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApteka()
    {
        return $this->hasOne(Apteka::className(), ['id' => 'aptekaId']);
    }
}
