<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TBdPerson */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tbd Person',
]) . $model->FID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbd People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FID, 'url' => ['view', 'id' => $model->FID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbd-person-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
