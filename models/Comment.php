<?php

namespace mbischof\comments\models;

use Yii;

/**
 * This is the model class for table "{{%comment}}".
 *
 * @property integer $id
 * @property string $modelClass
 * @property integer $modelId
 * @property string $text
 * @property integer $created
 * @property integer $userId
 * @property string $author
 * @property string $email
 * @property string $website
 * @property integer $isActive
 */
class Comment extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return '{{%comment}}';
    }
    
    public function rules()
    {
        return [
            [['modelId', 'created', 'userId', 'isActive'], 'integer'],
            [['text'], 'string'],
            [['modelClass', 'author', 'email', 'website'], 'string', 'max' => 255]
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'modelClass' => 'Model Class',
            'modelId' => 'Model ID',
            'text' => 'Text',
            'created' => 'Created',
            'userId' => 'User ID',
            'author' => 'Author',
            'email' => 'Email',
            'website' => 'Website',
            'isActive' => 'Is Active',
        ];
    }
}
