<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tenant_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'version')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'link_download')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
