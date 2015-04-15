<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'member_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
