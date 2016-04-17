<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Company */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'establishment',
            'secotrcount:ntext',
            'marketsize',
            'headquarters',
            'ipostock',
            'companytypeid',
            'noofemployees',
            'targetedmarkets:ntext',
            'scopecapacity:ntext',
            'clientscount',
            'productservicecount',
            'companyvaluation',
            'keyassociation:ntext',
            'patentcount',
            'peers:ntext',
            'companydetail:ntext',
            'website:ntext',
            'logo:ntext',
            'presentcreditfacilities:ntext',
            'taxabilityofproducts:ntext',
            'financialsid',
            'fblink',
            'twitterlink',
            'googlepluslink',
            'linkedinlink',
            'requiremtnid',
            'requirement_meta:ntext',
            'requirement_note:ntext',
            'userid',
        ],
    ]) ?>

</div>
