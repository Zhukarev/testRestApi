<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $title
 * @property string $publishing_house
 * @property int $author_id
 * @property string $year_publish
 *
 * @property Author $author
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'publishing_house', 'author_id', 'year_publish'], 'required'],
            [['author_id'], 'integer'],
            [['year_publish'], 'safe'],
            [['title', 'publishing_house'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'publishing_house' => 'Publishing House',
            'author_id' => 'Author ID',
            'year_publish' => 'Year Publish',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
//        return Author::findOne($this->author_id)->name;
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }


}
