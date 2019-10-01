<?php

namespace app\modules\api\v1\controllers;

use yii\rest\ActiveController;
use app\models\Book;

class BookController extends ActiveController
{

    public $modelClass = 'app\models\Book';


    public function actionList()
    {
        return Book::find()->all();
    }
}