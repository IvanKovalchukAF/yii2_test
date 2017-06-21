<?php

namespace app\modules\blog\models;

use app\models\User;
use Yii;


/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string $intro
 * @property string $content
 * @property string $data
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'intro', 'content'], 'required'],
            [['content'], 'string'],
            [['data'], 'safe'],
            [['title'], 'string', 'max' => 150],
            [['intro'], 'string', 'max' => 250],
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
            'intro' => 'Intro',
            'content' => 'Content',
            'data' => 'Data',
        ];
    }
}
