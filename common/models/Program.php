<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "program".
 *
 * @property string $id
 * @property string $member_id
 * @property string $title
 * @property string $short_descriptiom
 * @property string $content
 * @property string $image
 * @property string $created_date
 * @property string $modified_date
 *
 * @property Member $member
 */
class Program extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'program';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['title'], 'string', 'max' => 64],
            [['short_descriptiom', 'content', 'image'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'member_id' => 'Member ID',
            'title' => 'Title',
            'short_descriptiom' => 'Short Descriptiom',
            'content' => 'Content',
            'image' => 'Image',
            'created_date' => 'Created Date',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Member::className(), ['id' => 'member_id']);
    }
}
