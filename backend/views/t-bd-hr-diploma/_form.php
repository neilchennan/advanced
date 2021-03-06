<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TBdHrDiploma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbd-hr-diploma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAME_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAME_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAME_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNUMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDESCRIPTION_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDESCRIPTION_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDESCRIPTION_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FSIMPLENAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FINDEX')->textInput() ?>

    <?= $form->field($model, 'FCREATORID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCREATETIME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLASTUPDATEUSERID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLASTUPDATETIME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCONTROLUNITID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDIPLOMATYPE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FSTATE')->textInput() ?>

    <?= $form->field($model, 'FLEVELCODE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
