<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tenant".
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $joined_date
 * @property string $modified_date
 *
 * @property Member[] $members
 * @property Product[] $products
 */
class Tenant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tenant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['joined_date', 'modified_date'], 'safe'],
            [['name'], 'string', 'max' => 64],
            [['description', 'image'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'image' => 'Image',
            'joined_date' => 'Joined Date',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMembers()
    {
        return $this->hasMany(Member::className(), ['tenant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['tenant_id' => 'id']);
    }
}
