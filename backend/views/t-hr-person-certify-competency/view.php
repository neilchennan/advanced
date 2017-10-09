<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\THrPersonCertifyCompetency */

$this->title = $model->FID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thr Person Certify Competencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thr-person-certify-competency-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->FID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->FID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FID',
            'FCREATORID',
            'FCREATETIME',
            'FLASTUPDATEUSERID',
            'FLASTUPDATETIME',
            'FCONTROLUNITID',
            'FOBTAINDATE',
            'FFROMUNIT',
            'FCERTIFICATENUMBER',
            'FDESCRIPTION_L1',
            'FDESCRIPTION_L2',
            'FDESCRIPTION_L3',
            'FPERSONID',
            'FCERTIFIEDCOMPETENCYID',
            'FHRORGUNITID',
            'FISHIGHEST',
            'FZDY1',
            'FZDY2',
            'FZDY3',
            'FZDY4',
            'FZDY5',
            'FZDY6',
            'FZDY7',
            'FZDY8',
            'FZDY9',
            'FZDY10',
            'FZDY11',
            'FZDY12',
            'FZDY13',
            'FZDY14',
            'FZDY15',
            'FZDY16',
            'FZDY17',
            'FZDY18',
            'FZDY19',
            'FISHIGHESTCOMPETENCY',
            'FAPPOINTUNIT',
            'FAPPOINTDATE',
            'FNAME_L1',
            'FNAME_L2',
            'FNAME_L3',
            'FNUMBER',
            'FSIMPLENAME',
            'CFZGDJ',
            'CFZCZSBH',
            'CFZYZYZ',
            'CFYXQ',
            'CFZY',
            'CFKSSJ',
            'CFJSSJ',
            'CFJXJY',
            'CFJXJYZS',
            'CFISJXJY',
            'CFPXJYRQ',
            'CFZSBGD',
            'CFBGBH',
            'CFPBM',
        ],
    ]) ?>

</div>
