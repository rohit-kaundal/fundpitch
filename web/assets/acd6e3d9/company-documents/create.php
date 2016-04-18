<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CompanyDocuments */

$this->title = 'Create Company Documents';
$this->params['breadcrumbs'][] = ['label' => 'Company Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-documents-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
