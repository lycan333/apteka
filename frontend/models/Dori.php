<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dori".
 *
 * @property int $id
 * @property string $nomi
 * @property int $firmaId
 * @property string $seria
 * @property string $madeDate
 * @property string $DeadLine
 *
 * @property Buyurtma[] $buyurtmas
 * @property Firma $firma
 */
class Dori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firmaId', 'seria', 'madeDate', 'DeadLine'], 'required'],
            [['firmaId'], 'integer'],
            [['madeDate', 'DeadLine'], 'safe'],
            [['nomi'], 'string', 'max' => 300],
            [['seria'], 'string', 'max' => 11],
            [['firmaId'], 'exist', 'skipOnError' => true, 'targetClass' => Firma::className(), 'targetAttribute' => ['firmaId' => 'id']],
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
            'firmaId' => 'Firma ID',
            'seria' => 'Seria',
            'madeDate' => 'Made Date',
            'DeadLine' => 'Dead Line',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuyurtmas()
    {
        return $this->hasMany(Buyurtma::className(), ['doriId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirma()
    {
        return $this->hasOne(Firma::className(), ['id' => 'firmaId']);
    }
}
