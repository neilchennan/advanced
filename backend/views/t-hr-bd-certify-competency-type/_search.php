<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\THrBdCertifyCompetencyTypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thr-bd-certify-competency-type-search">

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

    <?php // echo $form->field($model, 'FISSTANDARD') ?>

    <?php // echo $form->field($model, 'FHRORGUNITID') ?>

    <?php // echo $form->field($model, 'FPARENTID') ?>

    <?php // echo $form->field($model, 'FISLEAF') ?>

    <?php // echo $form->field($model, 'FLEVEL') ?>

    <?php // echo $form->field($model, 'FLONGNUMBER') ?>

    <?php // echo $form->field($model, 'FDISPLAYNAME_L1') ?>

    <?php // echo $form->field($model, 'FDISPLAYNAME_L2') ?>

    <?php // echo $form->field($model, 'FDISPLAYNAME_L3') ?>

    <?php // echo $form->field($model, 'FSTATE') ?>

    <?php // echo $form->field($model, 'FINDEX') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
