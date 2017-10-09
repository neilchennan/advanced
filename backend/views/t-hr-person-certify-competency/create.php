<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\THrPersonCertifyCompetency */

$this->title = Yii::t('app', 'Create Thr Person Certify Competency');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thr Person Certify Competencies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thr-person-certify-competency-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
