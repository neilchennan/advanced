<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TBdHrDiplomaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tbd Hr Diplomas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbd-hr-diploma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tbd Hr Diploma'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FID',
            'FNAME_L1',
            'FNAME_L2',
            'FNAME_L3',
            'FNUMBER',
            // 'FDESCRIPTION_L1',
            // 'FDESCRIPTION_L2',
            // 'FDESCRIPTION_L3',
            // 'FSIMPLENAME',
            // 'FINDEX',
            // 'FCREATORID',
            // 'FCREATETIME',
            // 'FLASTUPDATEUSERID',
            // 'FLASTUPDATETIME',
            // 'FCONTROLUNITID',
            // 'FDIPLOMATYPE',
            // 'FSTATE',
            // 'FLEVELCODE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
