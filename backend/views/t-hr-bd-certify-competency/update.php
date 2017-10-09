<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\THrBdCertifyCompetency */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Thr Bd Certify Competency',
]) . $model->FID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thr Bd Certify Competencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FID, 'url' => ['view', 'id' => $model->FID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="thr-bd-certify-competency-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
