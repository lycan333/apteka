<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $FIO
 * @property string $tel
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Apteka[] $aptekas
 */
class User extends \common\models\User
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'FIO', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['FIO'], 'string', 'max' => 300],
            [['tel'], 'string', 'max' => 11],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'FIO' => 'F.I.O',
            'tel' => 'Tel',
            'status' => 'Status',
            'created_at' => 'Ro\'yhatdan o\'tgan vaqti' ,
            'updated_at' => 'So\'ngi o\'zgartirilgan vaqt',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAptekas()
    {
        return $this->hasMany(Apteka::className(), ['meneger' => 'id']);
    }
}
