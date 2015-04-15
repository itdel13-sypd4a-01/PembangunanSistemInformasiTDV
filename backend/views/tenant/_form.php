<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tenant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'joined_date')->textInput() ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
