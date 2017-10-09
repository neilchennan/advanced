<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\THrBdCertifyCompetencySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Thr Bd Certify Competencies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thr-bd-certify-competency-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Thr Bd Certify Competency'), ['create'], ['class' => 'btn btn-success']) ?>
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
//             'FCONTROLUNITID',
            // 'FNAME_L1',
             'FNAME_L2',
            // 'FNAME_L3',
             'FNUMBER',
            // 'FDESCRIPTION_L1',
            // 'FDESCRIPTION_L2',
            // 'FDESCRIPTION_L3',
            // 'FSIMPLENAME',
            [
                'attribute' => 'FCATEGORYID',
                'value'     => function ($model) {
                    return Html::a($model['FCATEGORYID'], [
                        '/t-hr-bd-certify-competency-type/view',
                        'id' => $model['FCATEGORYID'],
                    ],
                        ['target' => '_blank']);
                },
                'format'    => 'raw',
            ],
             'FLEVELID',
             'FISSTANDARD',
//             'FHRORGUNITID',
            // 'FSTATE',
            // 'FINDEX',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
