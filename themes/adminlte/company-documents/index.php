<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCompanyDocuments */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Company Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-documents-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Company Documents', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'documenttypeid',
            'date',
            'file:ntext',
            'companyid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
