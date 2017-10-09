<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "T_BD_HRDIPLOMA".
 *
 * @property string $FID
 * @property string $FNAME_L1
 * @property string $FNAME_L2
 * @property string $FNAME_L3
 * @property string $FNUMBER
 * @property string $FDESCRIPTION_L1
 * @property string $FDESCRIPTION_L2
 * @property string $FDESCRIPTION_L3
 * @property string $FSIMPLENAME
 * @property integer $FINDEX
 * @property string $FCREATORID
 * @property string $FCREATETIME
 * @property string $FLASTUPDATEUSERID
 * @property string $FLASTUPDATETIME
 * @property string $FCONTROLUNITID
 * @property string $FDIPLOMATYPE
 * @property integer $FSTATE
 * @property integer $FLEVELCODE
 */
class TBdHrDiploma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'T_BD_HRDIPLOMA';
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
            [['FID', 'FNUMBER'], 'required'],
            [['FINDEX', 'FSTATE', 'FLEVELCODE'], 'integer'],
            [['FCREATETIME', 'FLASTUPDATETIME'], 'safe'],
            [['FID', 'FCREATORID', 'FLASTUPDATEUSERID', 'FCONTROLUNITID', 'FDIPLOMATYPE'], 'string', 'max' => 44],
            [['FNAME_L1', 'FNAME_L2', 'FNAME_L3', 'FNUMBER', 'FDESCRIPTION_L1', 'FDESCRIPTION_L2', 'FDESCRIPTION_L3', 'FSIMPLENAME'], 'string', 'max' => 240],
            [['FNUMBER', 'FNUMBER', 'FNUMBER', 'FNUMBER'], 'unique', 'targetAttribute' => ['FNUMBER', 'FNUMBER', 'FNUMBER', 'FNUMBER'], 'message' => 'The combination of  and Fnumber has already been taken.'],
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
            'FNAME_L1' => Yii::t('app', 'Fname  L1'),
            'FNAME_L2' => Yii::t('app', 'Fname  L2'),
            'FNAME_L3' => Yii::t('app', 'Fname  L3'),
            'FNUMBER' => Yii::t('app', 'Fnumber'),
            'FDESCRIPTION_L1' => Yii::t('app', 'Fdescription  L1'),
            'FDESCRIPTION_L2' => Yii::t('app', 'Fdescription  L2'),
            'FDESCRIPTION_L3' => Yii::t('app', 'Fdescription  L3'),
            'FSIMPLENAME' => Yii::t('app', 'Fsimplename'),
            'FINDEX' => Yii::t('app', 'Findex'),
            'FCREATORID' => Yii::t('app', 'Fcreatorid'),
            'FCREATETIME' => Yii::t('app', 'Fcreatetime'),
            'FLASTUPDATEUSERID' => Yii::t('app', 'Flastupdateuserid'),
            'FLASTUPDATETIME' => Yii::t('app', 'Flastupdatetime'),
            'FCONTROLUNITID' => Yii::t('app', 'Fcontrolunitid'),
            'FDIPLOMATYPE' => Yii::t('app', 'Fdiplomatype'),
            'FSTATE' => Yii::t('app', 'Fstate'),
            'FLEVELCODE' => Yii::t('app', 'Flevelcode'),
        ];
    }
}
