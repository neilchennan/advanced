<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TBdHrDiplomaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbd-hr-diploma-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'FID') ?>

    <?= $form->field($model, 'FNAME_L1') ?>

    <?= $form->field($model, 'FNAME_L2') ?>

    <?= $form->field($model, 'FNAME_L3') ?>

    <?= $form->field($model, 'FNUMBER') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L1') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L2') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L3') ?>

    <?php // echo $form->field($model, 'FSIMPLENAME') ?>

    <?php // echo $form->field($model, 'FINDEX') ?>

    <?php // echo $form->field($model, 'FCREATORID') ?>

    <?php // echo $form->field($model, 'FCREATETIME') ?>

    <?php // echo $form->field($model, 'FLASTUPDATEUSERID') ?>

    <?php // echo $form->field($model, 'FLASTUPDATETIME') ?>

    <?php // echo $form->field($model, 'FCONTROLUNITID') ?>

    <?php // echo $form->field($model, 'FDIPLOMATYPE') ?>

    <?php // echo $form->field($model, 'FSTATE') ?>

    <?php // echo $form->field($model, 'FLEVELCODE') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
