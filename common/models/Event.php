<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property string $id
 * @property string $member_id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $created_date
 * @property string $modified_date
 *
 * @property Member $member
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
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
            [['content', 'image'], 'string', 'max' => 128]
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
