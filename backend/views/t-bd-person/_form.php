<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TBdPerson */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbd-person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIDNUM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAME_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAME_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAME_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNUMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDESCRIPTION_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDESCRIPTION_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDESCRIPTION_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FSIMPLENAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FGENDER')->textInput() ?>

    <?= $form->field($model, 'FBIRTHDAY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FEMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FADDRESS_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FADDRESS_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FADDRESS_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FSTATE')->textInput() ?>

    <?= $form->field($model, 'FHOMEPHONE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FOFFICEPHONE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCELL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FBACKUPCELL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FBACKUPEMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FRTX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIDCARDNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIDCARDADRESS_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIDCARDADRESS_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIDCARDADRESS_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FPASSPORTNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FOLDNAME_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FOLDNAME_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FOLDNAME_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHEIGHT')->textInput() ?>

    <?= $form->field($model, 'FNATIVEPLACE_L1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNATIVEPLACE_L2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNATIVEPLACE_L3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FBLOODTYPE')->textInput() ?>

    <?= $form->field($model, 'FCREATORID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCREATETIME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLASTUPDATEUSERID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLASTUPDATETIME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FKACLASSFICATIONID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FWEDID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHEALTHID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FPOLITICALFACEID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FSTANDINGID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FFOLKID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FBIRTHID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCONTROLUNITID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHRORGUNITID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FRESIDENCEPLACE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLENOFACTUALSERVICE')->textInput() ?>

    <?= $form->field($model, 'FEMPLOYEETYPEID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHIGHESTTECHPOSTID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHIGHESTDEGREEID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FEMPLOYEECLASSIFYID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FDELETEDSTATUS')->textInput() ?>

    <?= $form->field($model, 'FLCMRATIONLEVELID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNATIONALITYID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FCHECKSTATE')->textInput() ?>

    <?= $form->field($model, 'FINDEX')->textInput() ?>

    <?= $form->field($model, 'FEMPLOYTECHPOSTID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHIGHESTSUBDEGREEID')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'FZDY15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY20')->textInput() ?>

    <?= $form->field($model, 'FZDY21')->textInput() ?>

    <?= $form->field($model, 'FZDY22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY23')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY24')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FZDY26')->textInput() ?>

    <?= $form->field($model, 'FFULLNAMEPINGYIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FSIMPLENAMEPINGYIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FISSTANDBY')->textInput() ?>

    <?= $form->field($model, 'FISSTANDBYCADRE')->textInput() ?>

    <?= $form->field($model, 'FHIGHESTCOMPETENCYID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAMEPINYIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FNAMESHORTPINYIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FREGRESIDENCEID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHJADDRESS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIDCARDADDRESS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHOMEPLACE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FEFFDT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLEFFDT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FHISTORYRELATEID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIDCARDBEGINDATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIDCARDENDDATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FEXTENDFIELDNUMONE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FPROTOCOL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIDCARDISSUEORG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFTC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFTSRYBSID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFFXDW')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFGATXZ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFPTTXZ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFISJZZ')->textInput() ?>

    <?= $form->field($model, 'CFJHSYQKID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFZVCSNY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFISGG')->textInput() ?>

    <?= $form->field($model, 'CFISQB')->textInput() ?>

    <?= $form->field($model, 'CFSBGXDW')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFYHKXX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFISXSCT')->textInput() ?>

    <?= $form->field($model, 'CFRDYZNX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFSXRQ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFJFSXRQ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFJFNX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFJFJZRQ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFGZD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CFRDTSJ')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
