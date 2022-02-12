<?php

namespace frontend\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "afri_posts".
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
        return 'afri_posts';
    }

    public function behaviors()
    {
        return[
            [
                'class'=>SluggableBehavior::className(),
                'attribute'=>'title',
                'ensureUnique'=>true
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'slug', 'image'], 'required'],
            [['body'], 'string'],
            [['status'], 'integer'],
            [['posted_by', 'created_at'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['slug'], 'string', 'max' => 255],
            [['image'],'file','extensions'=>'jpg,png,gif','maxFiles'=>3]
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

    public function getPoster()
    {
        return $this->hasOne(User::className(),['id'=>'posted_by']);
    }
}
