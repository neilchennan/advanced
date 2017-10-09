<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TBdPersonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbd-person-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'FID') ?>

    <?= $form->field($model, 'FIDNUM') ?>

    <?= $form->field($model, 'FNAME_L1') ?>

    <?= $form->field($model, 'FNAME_L2') ?>

    <?= $form->field($model, 'FNAME_L3') ?>

    <?php // echo $form->field($model, 'FNUMBER') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L1') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L2') ?>

    <?php // echo $form->field($model, 'FDESCRIPTION_L3') ?>

    <?php // echo $form->field($model, 'FSIMPLENAME') ?>

    <?php // echo $form->field($model, 'FGENDER') ?>

    <?php // echo $form->field($model, 'FBIRTHDAY') ?>

    <?php // echo $form->field($model, 'FEMAIL') ?>

    <?php // echo $form->field($model, 'FADDRESS_L1') ?>

    <?php // echo $form->field($model, 'FADDRESS_L2') ?>

    <?php // echo $form->field($model, 'FADDRESS_L3') ?>

    <?php // echo $form->field($model, 'FSTATE') ?>

    <?php // echo $form->field($model, 'FHOMEPHONE') ?>

    <?php // echo $form->field($model, 'FOFFICEPHONE') ?>

    <?php // echo $form->field($model, 'FCELL') ?>

    <?php // echo $form->field($model, 'FBACKUPCELL') ?>

    <?php // echo $form->field($model, 'FBACKUPEMAIL') ?>

    <?php // echo $form->field($model, 'FRTX') ?>

    <?php // echo $form->field($model, 'FIDCARDNO') ?>

    <?php // echo $form->field($model, 'FIDCARDADRESS_L1') ?>

    <?php // echo $form->field($model, 'FIDCARDADRESS_L2') ?>

    <?php // echo $form->field($model, 'FIDCARDADRESS_L3') ?>

    <?php // echo $form->field($model, 'FPASSPORTNO') ?>

    <?php // echo $form->field($model, 'FOLDNAME_L1') ?>

    <?php // echo $form->field($model, 'FOLDNAME_L2') ?>

    <?php // echo $form->field($model, 'FOLDNAME_L3') ?>

    <?php // echo $form->field($model, 'FHEIGHT') ?>

    <?php // echo $form->field($model, 'FNATIVEPLACE_L1') ?>

    <?php // echo $form->field($model, 'FNATIVEPLACE_L2') ?>

    <?php // echo $form->field($model, 'FNATIVEPLACE_L3') ?>

    <?php // echo $form->field($model, 'FBLOODTYPE') ?>

    <?php // echo $form->field($model, 'FCREATORID') ?>

    <?php // echo $form->field($model, 'FCREATETIME') ?>

    <?php // echo $form->field($model, 'FLASTUPDATEUSERID') ?>

    <?php // echo $form->field($model, 'FLASTUPDATETIME') ?>

    <?php // echo $form->field($model, 'FKACLASSFICATIONID') ?>

    <?php // echo $form->field($model, 'FWEDID') ?>

    <?php // echo $form->field($model, 'FHEALTHID') ?>

    <?php // echo $form->field($model, 'FPOLITICALFACEID') ?>

    <?php // echo $form->field($model, 'FSTANDINGID') ?>

    <?php // echo $form->field($model, 'FFOLKID') ?>

    <?php // echo $form->field($model, 'FBIRTHID') ?>

    <?php // echo $form->field($model, 'FCONTROLUNITID') ?>

    <?php // echo $form->field($model, 'FHRORGUNITID') ?>

    <?php // echo $form->field($model, 'FRESIDENCEPLACE') ?>

    <?php // echo $form->field($model, 'FLENOFACTUALSERVICE') ?>

    <?php // echo $form->field($model, 'FEMPLOYEETYPEID') ?>

    <?php // echo $form->field($model, 'FHIGHESTTECHPOSTID') ?>

    <?php // echo $form->field($model, 'FHIGHESTDEGREEID') ?>

    <?php // echo $form->field($model, 'FEMPLOYEECLASSIFYID') ?>

    <?php // echo $form->field($model, 'FDELETEDSTATUS') ?>

    <?php // echo $form->field($model, 'FLCMRATIONLEVELID') ?>

    <?php // echo $form->field($model, 'FNATIONALITYID') ?>

    <?php // echo $form->field($model, 'FCHECKSTATE') ?>

    <?php // echo $form->field($model, 'FINDEX') ?>

    <?php // echo $form->field($model, 'FEMPLOYTECHPOSTID') ?>

    <?php // echo $form->field($model, 'FHIGHESTSUBDEGREEID') ?>

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

    <?php // echo $form->field($model, 'FZDY20') ?>

    <?php // echo $form->field($model, 'FZDY21') ?>

    <?php // echo $form->field($model, 'FZDY22') ?>

    <?php // echo $form->field($model, 'FZDY23') ?>

    <?php // echo $form->field($model, 'FZDY24') ?>

    <?php // echo $form->field($model, 'FZDY25') ?>

    <?php // echo $form->field($model, 'FZDY26') ?>

    <?php // echo $form->field($model, 'FFULLNAMEPINGYIN') ?>

    <?php // echo $form->field($model, 'FSIMPLENAMEPINGYIN') ?>

    <?php // echo $form->field($model, 'FISSTANDBY') ?>

    <?php // echo $form->field($model, 'FISSTANDBYCADRE') ?>

    <?php // echo $form->field($model, 'FHIGHESTCOMPETENCYID') ?>

    <?php // echo $form->field($model, 'FNAMEPINYIN') ?>

    <?php // echo $form->field($model, 'FNAMESHORTPINYIN') ?>

    <?php // echo $form->field($model, 'FREGRESIDENCEID') ?>

    <?php // echo $form->field($model, 'FHJADDRESS') ?>

    <?php // echo $form->field($model, 'FIDCARDADDRESS') ?>

    <?php // echo $form->field($model, 'FHOMEPLACE') ?>

    <?php // echo $form->field($model, 'FEFFDT') ?>

    <?php // echo $form->field($model, 'FLEFFDT') ?>

    <?php // echo $form->field($model, 'FHISTORYRELATEID') ?>

    <?php // echo $form->field($model, 'FIDCARDBEGINDATE') ?>

    <?php // echo $form->field($model, 'FIDCARDENDDATE') ?>

    <?php // echo $form->field($model, 'FEXTENDFIELDNUMONE') ?>

    <?php // echo $form->field($model, 'FPROTOCOL') ?>

    <?php // echo $form->field($model, 'FIDCARDISSUEORG') ?>

    <?php // echo $form->field($model, 'CFTC') ?>

    <?php // echo $form->field($model, 'CFTSRYBSID') ?>

    <?php // echo $form->field($model, 'CFFXDW') ?>

    <?php // echo $form->field($model, 'CFGATXZ') ?>

    <?php // echo $form->field($model, 'CFPTTXZ') ?>

    <?php // echo $form->field($model, 'CFISJZZ') ?>

    <?php // echo $form->field($model, 'CFJHSYQKID') ?>

    <?php // echo $form->field($model, 'CFZVCSNY') ?>

    <?php // echo $form->field($model, 'CFISGG') ?>

    <?php // echo $form->field($model, 'CFISQB') ?>

    <?php // echo $form->field($model, 'CFSBGXDW') ?>

    <?php // echo $form->field($model, 'CFYHKXX') ?>

    <?php // echo $form->field($model, 'CFISXSCT') ?>

    <?php // echo $form->field($model, 'CFRDYZNX') ?>

    <?php // echo $form->field($model, 'CFSXRQ') ?>

    <?php // echo $form->field($model, 'CFJFSXRQ') ?>

    <?php // echo $form->field($model, 'CFJFNX') ?>

    <?php // echo $form->field($model, 'CFJFJZRQ') ?>

    <?php // echo $form->field($model, 'CFGZD') ?>

    <?php // echo $form->field($model, 'CFRDTSJ') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
