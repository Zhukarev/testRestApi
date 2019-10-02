<?php
/**
 * Created by PhpStorm.
 * User: ratiborv
 * Date: 02.10.19
 * Time: 13:43
 */

namespace app\modules\api\v1\models;


class Book extends \app\models\Book
{

    public function fields() {
        $fields = parent::fields();
        $fields['author_name'] = function () {
            return $this->author->name;
        };
        return $fields;
    }

}