<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $last_login
 *
 * @property Member[] $members
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_login'], 'safe'],
            [['username', 'password'], 'string', 'max' => 64]
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
            'password' => 'Password',
            'last_login' => 'Last Login',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembers()
    {
        return $this->hasMany(Member::className(), ['account_id' => 'id']);
    }
}
