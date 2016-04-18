<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCompany */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Company', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'establishment',
            'secotrcount:ntext',
            'marketsize',
            // 'headquarters',
            // 'ipostock',
            // 'companytypeid',
            // 'noofemployees',
            // 'targetedmarkets:ntext',
            // 'scopecapacity:ntext',
            // 'clientscount',
            // 'productservicecount',
            // 'companyvaluation',
            // 'keyassociation:ntext',
            // 'patentcount',
            // 'peers:ntext',
            // 'companydetail:ntext',
            // 'website:ntext',
            // 'logo:ntext',
            // 'presentcreditfacilities:ntext',
            // 'taxabilityofproducts:ntext',
            // 'financialsid',
            // 'fblink',
            // 'twitterlink',
            // 'googlepluslink',
            // 'linkedinlink',
            // 'requiremtnid',
            // 'requirement_meta:ntext',
            // 'requirement_note:ntext',
            // 'userid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
