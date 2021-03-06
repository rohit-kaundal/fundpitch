<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CompanyDocuments */

$this->title = 'Update Company Documents: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Company Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="company-documents-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
