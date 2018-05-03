<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "firma".
 *
 * @property int $id
 * @property string $name
 *
 * @property Dori[] $doris
 */
class Firma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Firma nomi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoris()
    {
        return $this->hasMany(Dori::className(), ['firmaId' => 'id']);
    }
}
