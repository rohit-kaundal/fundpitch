<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchCompany */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'establishment') ?>

    <?= $form->field($model, 'secotrcount') ?>

    <?= $form->field($model, 'marketsize') ?>

    <?php // echo $form->field($model, 'headquarters') ?>

    <?php // echo $form->field($model, 'ipostock') ?>

    <?php // echo $form->field($model, 'companytypeid') ?>

    <?php // echo $form->field($model, 'noofemployees') ?>

    <?php // echo $form->field($model, 'targetedmarkets') ?>

    <?php // echo $form->field($model, 'scopecapacity') ?>

    <?php // echo $form->field($model, 'clientscount') ?>

    <?php // echo $form->field($model, 'productservicecount') ?>

    <?php // echo $form->field($model, 'companyvaluation') ?>

    <?php // echo $form->field($model, 'keyassociation') ?>

    <?php // echo $form->field($model, 'patentcount') ?>

    <?php // echo $form->field($model, 'peers') ?>

    <?php // echo $form->field($model, 'companydetail') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'presentcreditfacilities') ?>

    <?php // echo $form->field($model, 'taxabilityofproducts') ?>

    <?php // echo $form->field($model, 'financialsid') ?>

    <?php // echo $form->field($model, 'fblink') ?>

    <?php // echo $form->field($model, 'twitterlink') ?>

    <?php // echo $form->field($model, 'googlepluslink') ?>

    <?php // echo $form->field($model, 'linkedinlink') ?>

    <?php // echo $form->field($model, 'requiremtnid') ?>

    <?php // echo $form->field($model, 'requirement_meta') ?>

    <?php // echo $form->field($model, 'requirement_note') ?>

    <?php // echo $form->field($model, 'userid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
