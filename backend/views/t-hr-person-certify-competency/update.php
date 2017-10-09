<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\THrPersonCertifyCompetency */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Thr Person Certify Competency',
]) . $model->FID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thr Person Certify Competencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FID, 'url' => ['view', 'id' => $model->FID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="thr-person-certify-competency-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
