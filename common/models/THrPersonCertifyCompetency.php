<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "T_HR_PERSONCERTIFYCOMPETENCY".
 *
 * @property string $FID
 * @property string $FCREATORID
 * @property string $FCREATETIME
 * @property string $FLASTUPDATEUSERID
 * @property string $FLASTUPDATETIME
 * @property string $FCONTROLUNITID
 * @property string $FOBTAINDATE
 * @property string $FFROMUNIT
 * @property string $FCERTIFICATENUMBER
 * @property string $FDESCRIPTION_L1
 * @property string $FDESCRIPTION_L2
 * @property string $FDESCRIPTION_L3
 * @property string $FPERSONID
 * @property string $FCERTIFIEDCOMPETENCYID
 * @property string $FHRORGUNITID
 * @property integer $FISHIGHEST
 * @property string $FZDY1
 * @property string $FZDY2
 * @property string $FZDY3
 * @property string $FZDY4
 * @property string $FZDY5
 * @property string $FZDY6
 * @property string $FZDY7
 * @property string $FZDY8
 * @property string $FZDY9
 * @property string $FZDY10
 * @property string $FZDY11
 * @property string $FZDY12
 * @property string $FZDY13
 * @property string $FZDY14
 * @property integer $FZDY15
 * @property integer $FZDY16
 * @property integer $FZDY17
 * @property string $FZDY18
 * @property string $FZDY19
 * @property integer $FISHIGHESTCOMPETENCY
 * @property string $FAPPOINTUNIT
 * @property string $FAPPOINTDATE
 * @property string $FNAME_L1
 * @property string $FNAME_L2
 * @property string $FNAME_L3
 * @property string $FNUMBER
 * @property string $FSIMPLENAME
 * @property string $CFZGDJ
 * @property string $CFZCZSBH
 * @property string $CFZYZYZ
 * @property string $CFYXQ
 * @property string $CFZY
 * @property string $CFKSSJ
 * @property string $CFJSSJ
 * @property string $CFJXJY
 * @property string $CFJXJYZS
 * @property integer $CFISJXJY
 * @property string $CFPXJYRQ
 * @property string $CFZSBGD
 * @property string $CFBGBH
 * @property string $CFPBM
 */
class THrPersonCertifyCompetency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'T_HR_PERSONCERTIFYCOMPETENCY';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_hr');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FID', 'FISHIGHEST'], 'required'],
            [['FCREATETIME', 'FLASTUPDATETIME', 'FOBTAINDATE', 'FZDY5', 'FZDY6', 'FZDY7', 'FZDY8', 'CFKSSJ', 'CFJSSJ', 'CFPXJYRQ'], 'safe'],
            [['FISHIGHEST', 'FZDY15', 'FZDY16', 'FZDY17', 'FISHIGHESTCOMPETENCY', 'CFISJXJY'], 'integer'],
            [['FZDY18', 'FZDY19'], 'number'],
            [['FID', 'FCREATORID', 'FLASTUPDATEUSERID', 'FCONTROLUNITID', 'FPERSONID', 'FCERTIFIEDCOMPETENCYID', 'FHRORGUNITID', 'FZDY1', 'FZDY2', 'FZDY3', 'FZDY4'], 'string', 'max' => 44],
            [['FFROMUNIT', 'FDESCRIPTION_L1', 'FDESCRIPTION_L2', 'FDESCRIPTION_L3'], 'string', 'max' => 600],
            [['FCERTIFICATENUMBER'], 'string', 'max' => 120],
            [['FZDY9', 'FZDY10', 'FZDY11', 'FZDY12', 'FZDY13', 'FZDY14', 'FNUMBER', 'FSIMPLENAME'], 'string', 'max' => 240],
            [['FAPPOINTUNIT', 'FAPPOINTDATE', 'FNAME_L1', 'FNAME_L2', 'FNAME_L3'], 'string', 'max' => 765],
            [['CFZGDJ', 'CFZCZSBH', 'CFZYZYZ', 'CFYXQ', 'CFZY', 'CFJXJY', 'CFJXJYZS', 'CFZSBGD', 'CFBGBH'], 'string', 'max' => 1500],
            [['CFPBM'], 'string', 'max' => 150],
            [['FID', 'FID', 'FID', 'FID'], 'unique', 'targetAttribute' => ['FID', 'FID', 'FID', 'FID'], 'message' => 'The combination of  and Fid has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FID' => Yii::t('app', 'Fid'),
            'FCREATORID' => Yii::t('app', 'Fcreatorid'),
            'FCREATETIME' => Yii::t('app', 'Fcreatetime'),
            'FLASTUPDATEUSERID' => Yii::t('app', 'Flastupdateuserid'),
            'FLASTUPDATETIME' => Yii::t('app', 'Flastupdatetime'),
            'FCONTROLUNITID' => Yii::t('app', 'Fcontrolunitid'),
            'FOBTAINDATE' => Yii::t('app', 'Fobtaindate'),
            'FFROMUNIT' => Yii::t('app', 'Ffromunit'),
            'FCERTIFICATENUMBER' => Yii::t('app', 'Fcertificatenumber'),
            'FDESCRIPTION_L1' => Yii::t('app', 'Fdescription  L1'),
            'FDESCRIPTION_L2' => Yii::t('app', 'Fdescription  L2'),
            'FDESCRIPTION_L3' => Yii::t('app', 'Fdescription  L3'),
            'FPERSONID' => Yii::t('app', 'Fpersonid'),
            'FCERTIFIEDCOMPETENCYID' => Yii::t('app', 'Fcertifiedcompetencyid'),
            'FHRORGUNITID' => Yii::t('app', 'Fhrorgunitid'),
            'FISHIGHEST' => Yii::t('app', 'Fishighest'),
            'FZDY1' => Yii::t('app', 'Fzdy1'),
            'FZDY2' => Yii::t('app', 'Fzdy2'),
            'FZDY3' => Yii::t('app', 'Fzdy3'),
            'FZDY4' => Yii::t('app', 'Fzdy4'),
            'FZDY5' => Yii::t('app', 'Fzdy5'),
            'FZDY6' => Yii::t('app', 'Fzdy6'),
            'FZDY7' => Yii::t('app', 'Fzdy7'),
            'FZDY8' => Yii::t('app', 'Fzdy8'),
            'FZDY9' => Yii::t('app', 'Fzdy9'),
            'FZDY10' => Yii::t('app', 'Fzdy10'),
            'FZDY11' => Yii::t('app', 'Fzdy11'),
            'FZDY12' => Yii::t('app', 'Fzdy12'),
            'FZDY13' => Yii::t('app', 'Fzdy13'),
            'FZDY14' => Yii::t('app', 'Fzdy14'),
            'FZDY15' => Yii::t('app', 'Fzdy15'),
            'FZDY16' => Yii::t('app', 'Fzdy16'),
            'FZDY17' => Yii::t('app', 'Fzdy17'),
            'FZDY18' => Yii::t('app', 'Fzdy18'),
            'FZDY19' => Yii::t('app', 'Fzdy19'),
            'FISHIGHESTCOMPETENCY' => Yii::t('app', 'Fishighestcompetency'),
            'FAPPOINTUNIT' => Yii::t('app', 'Fappointunit'),
            'FAPPOINTDATE' => Yii::t('app', 'Fappointdate'),
            'FNAME_L1' => Yii::t('app', 'Fname  L1'),
            'FNAME_L2' => Yii::t('app', 'Fname  L2'),
            'FNAME_L3' => Yii::t('app', 'Fname  L3'),
            'FNUMBER' => Yii::t('app', 'Fnumber'),
            'FSIMPLENAME' => Yii::t('app', 'Fsimplename'),
            'CFZGDJ' => Yii::t('app', 'Cfzgdj'),
            'CFZCZSBH' => Yii::t('app', 'Cfzczsbh'),
            'CFZYZYZ' => Yii::t('app', 'Cfzyzyz'),
            'CFYXQ' => Yii::t('app', 'Cfyxq'),
            'CFZY' => Yii::t('app', 'Cfzy'),
            'CFKSSJ' => Yii::t('app', 'Cfkssj'),
            'CFJSSJ' => Yii::t('app', 'Cfjssj'),
            'CFJXJY' => Yii::t('app', 'Cfjxjy'),
            'CFJXJYZS' => Yii::t('app', 'Cfjxjyzs'),
            'CFISJXJY' => Yii::t('app', 'Cfisjxjy'),
            'CFPXJYRQ' => Yii::t('app', 'Cfpxjyrq'),
            'CFZSBGD' => Yii::t('app', 'Cfzsbgd'),
            'CFBGBH' => Yii::t('app', 'Cfbgbh'),
            'CFPBM' => Yii::t('app', 'Cfpbm'),
        ];
    }
}
