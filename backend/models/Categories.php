<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "afri_categories".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $status
 * @property string $created_at
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'afri_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'status'], 'required'],
            [['description', 'status'], 'string'],
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
