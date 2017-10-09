<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\THrPersonCertifyCompetency */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thr-person-certify-competency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCREATORID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCREATETIME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLASTUPDATEUSERID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLASTUPDATETIME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCONTROLUNITID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FOBTAINDATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FFROMUNIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCERTIFICATENUMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDESCRIPTION_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDESCRIPTION_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDESCRIPTION_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FPERSONID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCERTIFIEDCOMPETENCYID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHRORGUNITID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FISHIGHEST')->textInput() ?>

    <?= $form->field($model, 'FZDY1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY15')->textInput() ?>

    <?= $form->field($model, 'FZDY16')->textInput() ?>

    <?= $form->field($model, 'FZDY17')->textInput() ?>

    <?= $form->field($model, 'FZDY18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FISHIGHESTCOMPETENCY')->textInput() ?>

    <?= $form->field($model, 'FAPPOINTUNIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FAPPOINTDATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAME_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAME_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAME_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNUMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FSIMPLENAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFZGDJ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFZCZSBH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFZYZYZ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFYXQ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFZY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFKSSJ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFJSSJ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFJXJY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFJXJYZS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFISJXJY')->textInput() ?>

    <?= $form->field($model, 'CFPXJYRQ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFZSBGD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFBGBH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFPBM')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
