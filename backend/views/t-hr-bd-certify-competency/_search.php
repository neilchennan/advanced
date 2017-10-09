<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\THrBdCertifyCompetencySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thr-bd-certify-competency-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'FID') ?>

    <?= $form->field($model, 'FCREATORID') ?>

    <?= $form->field($model, 'FCREATETIME') ?>

    <?= $form->field($model, 'FLASTUPDATEUSERID') ?>

    <?= $form->field($model, 'FLASTUPDATETIME') ?>

    <?php // echo $form->field($model, 'FCONTROLUNITID') ?>

    <?php // echo $form->field($model, 'FNAME_L1') ?>

    <?php // echo $form->field($model, 'FNAME_L2') ?>

    <?php // echo $form->field($model, 'FNAME_L3') ?>

    <?php // echo $form->field($model, 'FNUMBER') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L1') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L2') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L3') ?>

    <?php // echo $form->field($model, 'FSIMPLENAME') ?>

    <?php // echo $form->field($model, 'FCATEGORYID') ?>

    <?php // echo $form->field($model, 'FLEVELID') ?>

    <?php // echo $form->field($model, 'FISSTANDARD') ?>

    <?php // echo $form->field($model, 'FHRORGUNITID') ?>

    <?php // echo $form->field($model, 'FSTATE') ?>

    <?php // echo $form->field($model, 'FINDEX') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
