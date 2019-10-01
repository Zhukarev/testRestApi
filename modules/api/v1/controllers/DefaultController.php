<?php

namespace app\modules\api\v1\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `v1` module
 */
class DefaultController extends ActiveController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return '3';
    }
}
