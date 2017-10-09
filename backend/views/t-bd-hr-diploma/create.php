<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TBdHrDiploma */

$this->title = Yii::t('app', 'Create Tbd Hr Diploma');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbd Hr Diplomas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbd-hr-diploma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
