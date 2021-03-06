<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "T_HR_BDCERTIFYCOMPETENCYTYPE".
 *
 * @property string $FID
 * @property string $FCREATORID
 * @property string $FCREATETIME
 * @property string $FLASTUPDATEUSERID
 * @property string $FLASTUPDATETIME
 * @property string $FCONTROLUNITID
 * @property string $FNAME_L1
 * @property string $FNAME_L2
 * @property string $FNAME_L3
 * @property string $FNUMBER
 * @property string $FDESCRIPTION_L1
 * @property string $FDESCRIPTION_L2
 * @property string $FDESCRIPTION_L3
 * @property string $FSIMPLENAME
 * @property integer $FISSTANDARD
 * @property string $FHRORGUNITID
 * @property string $FPARENTID
 * @property integer $FISLEAF
 * @property integer $FLEVEL
 * @property string $FLONGNUMBER
 * @property string $FDISPLAYNAME_L1
 * @property string $FDISPLAYNAME_L2
 * @property string $FDISPLAYNAME_L3
 * @property integer $FSTATE
 * @property integer $FINDEX
 */
class THrBdCertifyCompetencyType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'T_HR_BDCERTIFYCOMPETENCYTYPE';
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
            [['FID'], 'required'],
            [['FCREATETIME', 'FLASTUPDATETIME'], 'safe'],
            [['FISSTANDARD', 'FISLEAF', 'FLEVEL', 'FSTATE', 'FINDEX'], 'integer'],
            [['FID', 'FCREATORID', 'FLASTUPDATEUSERID', 'FCONTROLUNITID', 'FHRORGUNITID', 'FPARENTID'], 'string', 'max' => 44],
            [['FNAME_L1', 'FNAME_L2', 'FNAME_L3', 'FDESCRIPTION_L1', 'FDESCRIPTION_L2', 'FDESCRIPTION_L3', 'FDISPLAYNAME_L1', 'FDISPLAYNAME_L2', 'FDISPLAYNAME_L3'], 'string', 'max' => 765],
            [['FNUMBER', 'FSIMPLENAME'], 'string', 'max' => 240],
            [['FLONGNUMBER'], 'string', 'max' => 600],
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
            'FNAME_L1' => Yii::t('app', 'Fname  L1'),
            'FNAME_L2' => Yii::t('app', 'Fname  L2'),
            'FNAME_L3' => Yii::t('app', 'Fname  L3'),
            'FNUMBER' => Yii::t('app', 'Fnumber'),
            'FDESCRIPTION_L1' => Yii::t('app', 'Fdescription  L1'),
            'FDESCRIPTION_L2' => Yii::t('app', 'Fdescription  L2'),
            'FDESCRIPTION_L3' => Yii::t('app', 'Fdescription  L3'),
            'FSIMPLENAME' => Yii::t('app', 'Fsimplename'),
            'FISSTANDARD' => Yii::t('app', 'Fisstandard'),
            'FHRORGUNITID' => Yii::t('app', 'Fhrorgunitid'),
            'FPARENTID' => Yii::t('app', 'Fparentid'),
            'FISLEAF' => Yii::t('app', 'Fisleaf'),
            'FLEVEL' => Yii::t('app', 'Flevel'),
            'FLONGNUMBER' => Yii::t('app', 'Flongnumber'),
            'FDISPLAYNAME_L1' => Yii::t('app', 'Fdisplayname  L1'),
            'FDISPLAYNAME_L2' => Yii::t('app', 'Fdisplayname  L2'),
            'FDISPLAYNAME_L3' => Yii::t('app', 'Fdisplayname  L3'),
            'FSTATE' => Yii::t('app', 'Fstate'),
            'FINDEX' => Yii::t('app', 'Findex'),
        ];
    }
}
