<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $id
 * @property string $tenant_id
 * @property string $name
 * @property string $version
 * @property string $link_download
 * @property string $description
 * @property string $created_date
 * @property string $modified_date
 *
 * @property Tenant $tenant
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tenant_id'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['name', 'version'], 'string', 'max' => 64],
            [['link_download', 'description'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tenant_id' => 'Tenant ID',
            'name' => 'Name',
            'version' => 'Version',
            'link_download' => 'Link Download',
            'description' => 'Description',
            'created_date' => 'Created Date',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTenant()
    {
        return $this->hasOne(Tenant::className(), ['id' => 'tenant_id']);
    }
}
