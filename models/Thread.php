<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thread".
 *
 * @property int $thread_id
 * @property string $title
 * @property string $description
 * @property int|null $image
 * @property string|null $date
 * @property string|null $status
 */
class Thread extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'thread';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['image'], 'default', 'value' => null],
            [['image'], 'file','extensions'=>'jpg, jpeg, png','maxSize'=>1024*1024*1, 'on' => 'create'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 160],
            [['status'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'thread_id' => 'Thread ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }
}
