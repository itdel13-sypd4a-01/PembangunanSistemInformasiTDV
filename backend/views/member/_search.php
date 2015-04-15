<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchMember */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'account_id') ?>

    <?= $form->field($model, 'tenant_id') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'short_name') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'date_of_birth') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'joined_date') ?>

    <?php // echo $form->field($model, 'modified_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
