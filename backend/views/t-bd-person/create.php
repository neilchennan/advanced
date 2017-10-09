<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TBdPerson */

$this->title = Yii::t('app', 'Create Tbd Person');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbd People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbd-person-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
