<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\THrBdCertifyCompetencyTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Thr Bd Certify Competency Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thr-bd-certify-competency-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Thr Bd Certify Competency Type'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FID',
//            'FCREATORID',
//            'FCREATETIME',
//            'FLASTUPDATEUSERID',
//            'FLASTUPDATETIME',
            // 'FCONTROLUNITID',
            // 'FNAME_L1',
             'FNAME_L2',
            // 'FNAME_L3',
             'FNUMBER',
            // 'FDESCRIPTION_L1',
            // 'FDESCRIPTION_L2',
            // 'FDESCRIPTION_L3',
            // 'FSIMPLENAME',
             'FISSTANDARD',
//             'FHRORGUNITID',
             'FPARENTID',
             'FISLEAF',
             'FLEVEL',
             'FLONGNUMBER',
            // 'FDISPLAYNAME_L1',
//             'FDISPLAYNAME_L2',
            // 'FDISPLAYNAME_L3',
            // 'FSTATE',
            // 'FINDEX',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
