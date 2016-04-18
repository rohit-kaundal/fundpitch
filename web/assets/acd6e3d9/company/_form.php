<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'establishment')->textInput() ?>

    <?= $form->field($model, 'secotrcount')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'marketsize')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'headquarters')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ipostock')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'companytypeid')->textInput() ?>

    <?= $form->field($model, 'noofemployees')->textInput() ?>

    <?= $form->field($model, 'targetedmarkets')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'scopecapacity')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'clientscount')->textInput() ?>

    <?= $form->field($model, 'productservicecount')->textInput() ?>

    <?= $form->field($model, 'companyvaluation')->textInput() ?>

    <?= $form->field($model, 'keyassociation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'patentcount')->textInput() ?>

    <?= $form->field($model, 'peers')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'companydetail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'website')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'logo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'presentcreditfacilities')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'taxabilityofproducts')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'financialsid')->textInput() ?>

    <?= $form->field($model, 'fblink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitterlink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'googlepluslink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedinlink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requiremtnid')->textInput() ?>

    <?= $form->field($model, 'requirement_meta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'requirement_note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'userid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
