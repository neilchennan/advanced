<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\THrBdCertifyCompetencyType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Thr Bd Certify Competency Type',
]) . $model->FID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thr Bd Certify Competency Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FID, 'url' => ['view', 'id' => $model->FID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="thr-bd-certify-competency-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
