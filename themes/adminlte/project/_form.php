<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>
























<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_date')->textInput() ?>

    <?= $form->field($model, 'abusecount')->textInput() ?>

    <?= $form->field($model, 'deadline_date')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'posted_by_id')->textInput() ?>

    <?= $form->field($model, 'visibility')->dropDownList([ 'pr' => 'Pr', 'pu' => 'Pu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'company_relation')->dropDownList([ 'ex' => 'Ex', 'new' => 'New', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
