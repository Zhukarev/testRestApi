<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Author;


/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publishing_house')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_id')->dropDownList
    (
        ArrayHelper::map(Author::find()->all(), 'id', 'name'),
        $params = ['prompt' => 'Выберите автора...']
    )->label('Автор') ?>

    <?= $form->field($model, 'year_publish')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
