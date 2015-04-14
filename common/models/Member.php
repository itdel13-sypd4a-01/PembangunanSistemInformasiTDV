<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property string $id
 * @property string $account_id
 * @property string $tenant_id
 * @property string $full_name
 * @property string $short_name
 * @property string $email
 * @property string $date_of_birth
 * @property string $gender
 * @property string $address
 * @property string $image
 * @property string $joined_date
 * @property string $modified_date
 *
 * @property Event[] $events
 * @property Account $account
 * @property Tenant $tenant
 * @property Program[] $programs
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_id', 'tenant_id'], 'integer'],
            [['date_of_birth', 'joined_date', 'modified_date'], 'safe'],
            [['full_name', 'short_name'], 'string', 'max' => 64],
            [['email', 'address', 'image'], 'string', 'max' => 128],
            [['gender'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_id' => 'Account ID',
            'tenant_id' => 'Tenant ID',
            'full_name' => 'Full Name',
            'short_name' => 'Short Name',
            'email' => 'Email',
            'date_of_birth' => 'Date Of Birth',
            'gender' => 'Gender',
            'address' => 'Address',
            'image' => 'Image',
            'joined_date' => 'Joined Date',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['member_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTenant()
    {
        return $this->hasOne(Tenant::className(), ['id' => 'tenant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograms()
    {
        return $this->hasMany(Program::className(), ['member_id' => 'id']);
    }
}
