<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\THrBdCertifyCompetencyType */

$this->title = $model->FID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thr Bd Certify Competency Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thr-bd-certify-competency-type-view">

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
            'FNAME_L1',
            'FNAME_L2',
            'FNAME_L3',
            'FNUMBER',
            'FDESCRIPTION_L1',
            'FDESCRIPTION_L2',
            'FDESCRIPTION_L3',
            'FSIMPLENAME',
            'FISSTANDARD',
            'FHRORGUNITID',
            'FPARENTID',
            'FISLEAF',
            'FLEVEL',
            'FLONGNUMBER',
            'FDISPLAYNAME_L1',
            'FDISPLAYNAME_L2',
            'FDISPLAYNAME_L3',
            'FSTATE',
            'FINDEX',
        ],
    ]) ?>

</div>
