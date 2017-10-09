<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\THrBdCertifyCompetencyType */

$this->title = Yii::t('app', 'Create Thr Bd Certify Competency Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thr Bd Certify Competency Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thr-bd-certify-competency-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
