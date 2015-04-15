<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'short_name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'joined_date')->textInput() ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
