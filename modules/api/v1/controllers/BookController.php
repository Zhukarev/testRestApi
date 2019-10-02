<?php

namespace app\modules\api\v1\controllers;

use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class BookController extends ActiveController
{

    public $modelClass = 'app\models\Book';


    public function actionList()
    {

        return new ActiveDataProvider([
            'query' => \app\modules\api\v1\models\Book::find()
        ]);
    }


}