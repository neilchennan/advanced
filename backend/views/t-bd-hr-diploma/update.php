<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TBdHrDiploma */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tbd Hr Diploma',
]) . $model->FID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbd Hr Diplomas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FID, 'url' => ['view', 'id' => $model->FID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbd-hr-diploma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
