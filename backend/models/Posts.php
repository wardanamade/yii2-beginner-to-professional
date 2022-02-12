<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%posts}}".
 *
 * @property integer $id
 * @property string $posted_by
 * @property string $title
 * @property string $body
 * @property string $image
 * @property integer $status
 * @property string $slug
 * @property string $created_at
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%posts}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['posted_by', 'title', 'body', 'image', 'slug'], 'required'],
            [['body'], 'string'],
            [['status'], 'integer'],
            [['created_at'], 'safe'],
            [['posted_by', 'title'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 200],
            [['slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'posted_by' => 'Posted By',
            'title' => 'Title',
            'body' => 'Body',
            'image' => 'Image',
            'status' => 'Status',
            'slug' => 'Slug',
            'created_at' => 'Created At',
        ];
    }
}
