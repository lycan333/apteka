<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "onlineMurojatlar".
 *
 * @property int $id
 * @property string $level
 * @property string $xabar
 * @property string $mavzu
 * @property int $UserId
 */
class OnlineMurojatlar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'onlineMurojatlar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level', 'xabar', 'mavzu', 'UserId'], 'required'],
            [['xabar'], 'string'],
            [['UserId'], 'integer'],
            [['level'], 'string', 'max' => 11],
            [['mavzu'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeValidate()
    {
        $this->UserId = Yii::$app->user->id;
        return parent::beforeValidate(); // TODO: Change the autogenerated stub
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level' => 'Level',
            'xabar' => 'Xabar',
            'mavzu' => 'Mavzu',
            'UserId' => 'User ID',
        ];
    }
}
