<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\THrPersonCertifyCompetencySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thr-person-certify-competency-search">

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

    <?php // echo $form->field($model, 'FOBTAINDATE') ?>

    <?php // echo $form->field($model, 'FFROMUNIT') ?>

    <?php // echo $form->field($model, 'FCERTIFICATENUMBER') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L1') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L2') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L3') ?>

    <?php // echo $form->field($model, 'FPERSONID') ?>

    <?php // echo $form->field($model, 'FCERTIFIEDCOMPETENCYID') ?>

    <?php // echo $form->field($model, 'FHRORGUNITID') ?>

    <?php // echo $form->field($model, 'FISHIGHEST') ?>

    <?php // echo $form->field($model, 'FZDY1') ?>

    <?php // echo $form->field($model, 'FZDY2') ?>

    <?php // echo $form->field($model, 'FZDY3') ?>

    <?php // echo $form->field($model, 'FZDY4') ?>

    <?php // echo $form->field($model, 'FZDY5') ?>

    <?php // echo $form->field($model, 'FZDY6') ?>

    <?php // echo $form->field($model, 'FZDY7') ?>

    <?php // echo $form->field($model, 'FZDY8') ?>

    <?php // echo $form->field($model, 'FZDY9') ?>

    <?php // echo $form->field($model, 'FZDY10') ?>

    <?php // echo $form->field($model, 'FZDY11') ?>

    <?php // echo $form->field($model, 'FZDY12') ?>

    <?php // echo $form->field($model, 'FZDY13') ?>

    <?php // echo $form->field($model, 'FZDY14') ?>

    <?php // echo $form->field($model, 'FZDY15') ?>

    <?php // echo $form->field($model, 'FZDY16') ?>

    <?php // echo $form->field($model, 'FZDY17') ?>

    <?php // echo $form->field($model, 'FZDY18') ?>

    <?php // echo $form->field($model, 'FZDY19') ?>

    <?php // echo $form->field($model, 'FISHIGHESTCOMPETENCY') ?>

    <?php // echo $form->field($model, 'FAPPOINTUNIT') ?>

    <?php // echo $form->field($model, 'FAPPOINTDATE') ?>

    <?php // echo $form->field($model, 'FNAME_L1') ?>

    <?php // echo $form->field($model, 'FNAME_L2') ?>

    <?php // echo $form->field($model, 'FNAME_L3') ?>

    <?php // echo $form->field($model, 'FNUMBER') ?>

    <?php // echo $form->field($model, 'FSIMPLENAME') ?>

    <?php // echo $form->field($model, 'CFZGDJ') ?>

    <?php // echo $form->field($model, 'CFZCZSBH') ?>

    <?php // echo $form->field($model, 'CFZYZYZ') ?>

    <?php // echo $form->field($model, 'CFYXQ') ?>

    <?php // echo $form->field($model, 'CFZY') ?>

    <?php // echo $form->field($model, 'CFKSSJ') ?>

    <?php // echo $form->field($model, 'CFJSSJ') ?>

    <?php // echo $form->field($model, 'CFJXJY') ?>

    <?php // echo $form->field($model, 'CFJXJYZS') ?>

    <?php // echo $form->field($model, 'CFISJXJY') ?>

    <?php // echo $form->field($model, 'CFPXJYRQ') ?>

    <?php // echo $form->field($model, 'CFZSBGD') ?>

    <?php // echo $form->field($model, 'CFBGBH') ?>

    <?php // echo $form->field($model, 'CFPBM') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
