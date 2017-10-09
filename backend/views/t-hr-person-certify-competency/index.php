<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\business\EhrHelper;
/* @var $this yii\web\View */
/* @var $searchModel common\models\THrPersonCertifyCompetencySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Thr Person Certify Competencies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thr-person-certify-competency-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Thr Person Certify Competency'), ['create'], ['class' => 'btn btn-success']) ?>
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
             'FOBTAINDATE',
             'FFROMUNIT',
             'FCERTIFICATENUMBER',
            // 'FDESCRIPTION_L1',
            // 'FDESCRIPTION_L2',
            // 'FDESCRIPTION_L3',
            [
//                'attribute' => 'FPERSONID',
                'label'          => '员工姓名',
                'value'     => function ($model) {
                    return Html::a(EhrHelper::getBdPersonNameById($model['FPERSONID']), [
                        '/t-bd-person/view',
                        'id' => $model['FPERSONID'],
                    ],
                        ['target' => '_blank']);
                },
                'format'    => 'raw',
            ],
            'FPERSONID',
            [
                'attribute' => 'FCERTIFIEDCOMPETENCYID',
                'value'     => function ($model) {
                    return Html::a($model['FCERTIFIEDCOMPETENCYID'], [
                        '/t-hr-bd-certify-competency/view',
                        'id' => $model['FCERTIFIEDCOMPETENCYID'],
                    ],
                        ['target' => '_blank']);
                },
                'format'    => 'raw',
            ],
//             'FHRORGUNITID',
            // 'FISHIGHEST',
            // 'FZDY1',
            // 'FZDY2',
            // 'FZDY3',
            // 'FZDY4',
            // 'FZDY5',
            // 'FZDY6',
            // 'FZDY7',
            // 'FZDY8',
            // 'FZDY9',
            // 'FZDY10',
            // 'FZDY11',
            // 'FZDY12',
            // 'FZDY13',
            // 'FZDY14',
            // 'FZDY15',
            // 'FZDY16',
            // 'FZDY17',
            // 'FZDY18',
            // 'FZDY19',
            // 'FISHIGHESTCOMPETENCY',
            // 'FAPPOINTUNIT',
            // 'FAPPOINTDATE',
            // 'FNAME_L1',
            // 'FNAME_L2',
            // 'FNAME_L3',
            // 'FNUMBER',
            // 'FSIMPLENAME',
            // 'CFZGDJ',
            // 'CFZCZSBH',
            // 'CFZYZYZ',
            // 'CFYXQ',
            // 'CFZY',
            // 'CFKSSJ',
            // 'CFJSSJ',
            // 'CFJXJY',
            // 'CFJXJYZS',
            // 'CFISJXJY',
            // 'CFPXJYRQ',
            // 'CFZSBGD',
            // 'CFBGBH',
            // 'CFPBM',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
