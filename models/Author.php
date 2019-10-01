<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string $name
 * @property string $year_birth
 *
 * @property Book[] $books
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'year_birth'], 'required'],
            [['year_birth'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'year_birth' => 'Year Birth',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }

//    public static function find()
//    {
//        $find = parent::find();
//        $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->id);
//        if (isset($roles['accountant'])) {
//            return $find->andWhere(['buchg_id' => Yii::$app->user->id]);
//        }
//        return $find;
//    }
}
