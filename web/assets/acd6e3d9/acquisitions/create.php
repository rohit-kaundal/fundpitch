<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Acquisitions */

$this->title = 'Create Acquisitions';
$this->params['breadcrumbs'][] = ['label' => 'Acquisitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acquisitions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
