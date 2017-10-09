<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "T_BD_PERSON".
 *
 * @property string $FID
 * @property string $FIDNUM
 * @property string $FNAME_L1
 * @property string $FNAME_L2
 * @property string $FNAME_L3
 * @property string $FNUMBER
 * @property string $FDESCRIPTION_L1
 * @property string $FDESCRIPTION_L2
 * @property string $FDESCRIPTION_L3
 * @property string $FSIMPLENAME
 * @property integer $FGENDER
 * @property string $FBIRTHDAY
 * @property string $FEMAIL
 * @property string $FADDRESS_L1
 * @property string $FADDRESS_L2
 * @property string $FADDRESS_L3
 * @property integer $FSTATE
 * @property string $FHOMEPHONE
 * @property string $FOFFICEPHONE
 * @property string $FCELL
 * @property string $FBACKUPCELL
 * @property string $FBACKUPEMAIL
 * @property string $FRTX
 * @property string $FIDCARDNO
 * @property string $FIDCARDADRESS_L1
 * @property string $FIDCARDADRESS_L2
 * @property string $FIDCARDADRESS_L3
 * @property string $FPASSPORTNO
 * @property string $FOLDNAME_L1
 * @property string $FOLDNAME_L2
 * @property string $FOLDNAME_L3
 * @property integer $FHEIGHT
 * @property string $FNATIVEPLACE_L1
 * @property string $FNATIVEPLACE_L2
 * @property string $FNATIVEPLACE_L3
 * @property integer $FBLOODTYPE
 * @property string $FCREATORID
 * @property string $FCREATETIME
 * @property string $FLASTUPDATEUSERID
 * @property string $FLASTUPDATETIME
 * @property string $FKACLASSFICATIONID
 * @property string $FWEDID
 * @property string $FHEALTHID
 * @property string $FPOLITICALFACEID
 * @property string $FSTANDINGID
 * @property string $FFOLKID
 * @property string $FBIRTHID
 * @property string $FCONTROLUNITID
 * @property string $FHRORGUNITID
 * @property string $FRESIDENCEPLACE
 * @property integer $FLENOFACTUALSERVICE
 * @property string $FEMPLOYEETYPEID
 * @property string $FHIGHESTTECHPOSTID
 * @property string $FHIGHESTDEGREEID
 * @property string $FEMPLOYEECLASSIFYID
 * @property integer $FDELETEDSTATUS
 * @property string $FLCMRATIONLEVELID
 * @property string $FNATIONALITYID
 * @property integer $FCHECKSTATE
 * @property integer $FINDEX
 * @property string $FEMPLOYTECHPOSTID
 * @property string $FHIGHESTSUBDEGREEID
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
 * @property string $FZDY15
 * @property string $FZDY16
 * @property string $FZDY17
 * @property string $FZDY18
 * @property string $FZDY19
 * @property integer $FZDY20
 * @property integer $FZDY21
 * @property string $FZDY22
 * @property string $FZDY23
 * @property string $FZDY24
 * @property string $FZDY25
 * @property integer $FZDY26
 * @property string $FFULLNAMEPINGYIN
 * @property string $FSIMPLENAMEPINGYIN
 * @property integer $FISSTANDBY
 * @property integer $FISSTANDBYCADRE
 * @property string $FHIGHESTCOMPETENCYID
 * @property string $FNAMEPINYIN
 * @property string $FNAMESHORTPINYIN
 * @property string $FREGRESIDENCEID
 * @property string $FHJADDRESS
 * @property string $FIDCARDADDRESS
 * @property string $FHOMEPLACE
 * @property string $FEFFDT
 * @property string $FLEFFDT
 * @property string $FHISTORYRELATEID
 * @property string $FIDCARDBEGINDATE
 * @property string $FIDCARDENDDATE
 * @property string $FEXTENDFIELDNUMONE
 * @property string $FPROTOCOL
 * @property string $FIDCARDISSUEORG
 * @property string $CFTC
 * @property string $CFTSRYBSID
 * @property string $CFFXDW
 * @property string $CFGATXZ
 * @property string $CFPTTXZ
 * @property integer $CFISJZZ
 * @property string $CFJHSYQKID
 * @property string $CFZVCSNY
 * @property integer $CFISGG
 * @property integer $CFISQB
 * @property string $CFSBGXDW
 * @property string $CFYHKXX
 * @property integer $CFISXSCT
 * @property string $CFRDYZNX
 * @property string $CFSXRQ
 * @property string $CFJFSXRQ
 * @property string $CFJFNX
 * @property string $CFJFJZRQ
 * @property string $CFGZD
 * @property string $CFRDTSJ
 */
class TBdPerson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'T_BD_PERSON';
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
            [['FGENDER', 'FSTATE', 'FHEIGHT', 'FBLOODTYPE', 'FLENOFACTUALSERVICE', 'FDELETEDSTATUS', 'FCHECKSTATE', 'FINDEX', 'FZDY20', 'FZDY21', 'FZDY26', 'FISSTANDBY', 'FISSTANDBYCADRE', 'CFISJZZ', 'CFISGG', 'CFISQB', 'CFISXSCT'], 'integer'],
            [['FBIRTHDAY', 'FCREATETIME', 'FLASTUPDATETIME', 'FZDY9', 'FZDY10', 'FZDY11', 'FZDY12', 'FZDY13', 'FZDY14', 'FEFFDT', 'FLEFFDT', 'FIDCARDBEGINDATE', 'FIDCARDENDDATE', 'CFZVCSNY', 'CFSXRQ', 'CFJFSXRQ', 'CFJFJZRQ', 'CFRDTSJ'], 'safe'],
            [['FZDY18', 'FZDY19', 'CFRDYZNX'], 'number'],
            [['FID', 'FCREATORID', 'FLASTUPDATEUSERID', 'FKACLASSFICATIONID', 'FWEDID', 'FHEALTHID', 'FPOLITICALFACEID', 'FSTANDINGID', 'FFOLKID', 'FBIRTHID', 'FCONTROLUNITID', 'FHRORGUNITID', 'FEMPLOYEETYPEID', 'FHIGHESTTECHPOSTID', 'FHIGHESTDEGREEID', 'FEMPLOYEECLASSIFYID', 'FLCMRATIONLEVELID', 'FNATIONALITYID', 'FEMPLOYTECHPOSTID', 'FHIGHESTSUBDEGREEID', 'FZDY1', 'FZDY2', 'FZDY3', 'FZDY4', 'FZDY5', 'FZDY6', 'FZDY7', 'FZDY8', 'FHIGHESTCOMPETENCYID', 'FNAMEPINYIN', 'FNAMESHORTPINYIN', 'FREGRESIDENCEID', 'FHISTORYRELATEID', 'CFTSRYBSID', 'CFJHSYQKID'], 'string', 'max' => 44],
            [['FIDNUM'], 'string', 'max' => 120],
            [['FNAME_L1', 'FNAME_L2', 'FNAME_L3', 'FNUMBER', 'FEMAIL', 'FHOMEPHONE', 'FOFFICEPHONE', 'FCELL', 'FBACKUPCELL', 'FBACKUPEMAIL', 'FRTX', 'FIDCARDNO', 'FPASSPORTNO', 'FOLDNAME_L1', 'FOLDNAME_L2', 'FOLDNAME_L3', 'FZDY16', 'FZDY17', 'FZDY22', 'FZDY23', 'FZDY24', 'FZDY25', 'FSIMPLENAMEPINGYIN', 'FHJADDRESS', 'FIDCARDADDRESS', 'FHOMEPLACE'], 'string', 'max' => 240],
            [['FDESCRIPTION_L1', 'FDESCRIPTION_L2', 'FDESCRIPTION_L3', 'FADDRESS_L1', 'FADDRESS_L2', 'FADDRESS_L3'], 'string', 'max' => 450],
            [['FSIMPLENAME', 'CFFXDW', 'CFSBGXDW'], 'string', 'max' => 150],
            [['FIDCARDADRESS_L1', 'FIDCARDADRESS_L2', 'FIDCARDADRESS_L3', 'FNATIVEPLACE_L1', 'FNATIVEPLACE_L2', 'FNATIVEPLACE_L3'], 'string', 'max' => 360],
            [['FRESIDENCEPLACE'], 'string', 'max' => 300],
            [['FZDY15', 'FEXTENDFIELDNUMONE', 'FIDCARDISSUEORG'], 'string', 'max' => 765],
            [['FFULLNAMEPINGYIN', 'CFGATXZ', 'CFPTTXZ', 'CFJFNX', 'CFGZD'], 'string', 'max' => 1500],
            [['FPROTOCOL'], 'string', 'max' => 600],
            [['CFTC', 'CFYHKXX'], 'string', 'max' => 3000],
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
            'FIDNUM' => Yii::t('app', 'Fidnum'),
            'FNAME_L1' => Yii::t('app', 'Fname  L1'),
            'FNAME_L2' => Yii::t('app', 'Fname  L2'),
            'FNAME_L3' => Yii::t('app', 'Fname  L3'),
            'FNUMBER' => Yii::t('app', 'Fnumber'),
            'FDESCRIPTION_L1' => Yii::t('app', 'Fdescription  L1'),
            'FDESCRIPTION_L2' => Yii::t('app', 'Fdescription  L2'),
            'FDESCRIPTION_L3' => Yii::t('app', 'Fdescription  L3'),
            'FSIMPLENAME' => Yii::t('app', 'Fsimplename'),
            'FGENDER' => Yii::t('app', 'Fgender'),
            'FBIRTHDAY' => Yii::t('app', 'Fbirthday'),
            'FEMAIL' => Yii::t('app', 'Femail'),
            'FADDRESS_L1' => Yii::t('app', 'Faddress  L1'),
            'FADDRESS_L2' => Yii::t('app', 'Faddress  L2'),
            'FADDRESS_L3' => Yii::t('app', 'Faddress  L3'),
            'FSTATE' => Yii::t('app', 'Fstate'),
            'FHOMEPHONE' => Yii::t('app', 'Fhomephone'),
            'FOFFICEPHONE' => Yii::t('app', 'Fofficephone'),
            'FCELL' => Yii::t('app', 'Fcell'),
            'FBACKUPCELL' => Yii::t('app', 'Fbackupcell'),
            'FBACKUPEMAIL' => Yii::t('app', 'Fbackupemail'),
            'FRTX' => Yii::t('app', 'Frtx'),
            'FIDCARDNO' => Yii::t('app', 'Fidcardno'),
            'FIDCARDADRESS_L1' => Yii::t('app', 'Fidcardadress  L1'),
            'FIDCARDADRESS_L2' => Yii::t('app', 'Fidcardadress  L2'),
            'FIDCARDADRESS_L3' => Yii::t('app', 'Fidcardadress  L3'),
            'FPASSPORTNO' => Yii::t('app', 'Fpassportno'),
            'FOLDNAME_L1' => Yii::t('app', 'Foldname  L1'),
            'FOLDNAME_L2' => Yii::t('app', 'Foldname  L2'),
            'FOLDNAME_L3' => Yii::t('app', 'Foldname  L3'),
            'FHEIGHT' => Yii::t('app', 'Fheight'),
            'FNATIVEPLACE_L1' => Yii::t('app', 'Fnativeplace  L1'),
            'FNATIVEPLACE_L2' => Yii::t('app', 'Fnativeplace  L2'),
            'FNATIVEPLACE_L3' => Yii::t('app', 'Fnativeplace  L3'),
            'FBLOODTYPE' => Yii::t('app', 'Fbloodtype'),
            'FCREATORID' => Yii::t('app', 'Fcreatorid'),
            'FCREATETIME' => Yii::t('app', 'Fcreatetime'),
            'FLASTUPDATEUSERID' => Yii::t('app', 'Flastupdateuserid'),
            'FLASTUPDATETIME' => Yii::t('app', 'Flastupdatetime'),
            'FKACLASSFICATIONID' => Yii::t('app', 'Fkaclassficationid'),
            'FWEDID' => Yii::t('app', 'Fwedid'),
            'FHEALTHID' => Yii::t('app', 'Fhealthid'),
            'FPOLITICALFACEID' => Yii::t('app', 'Fpoliticalfaceid'),
            'FSTANDINGID' => Yii::t('app', 'Fstandingid'),
            'FFOLKID' => Yii::t('app', 'Ffolkid'),
            'FBIRTHID' => Yii::t('app', 'Fbirthid'),
            'FCONTROLUNITID' => Yii::t('app', 'Fcontrolunitid'),
            'FHRORGUNITID' => Yii::t('app', 'Fhrorgunitid'),
            'FRESIDENCEPLACE' => Yii::t('app', 'Fresidenceplace'),
            'FLENOFACTUALSERVICE' => Yii::t('app', 'Flenofactualservice'),
            'FEMPLOYEETYPEID' => Yii::t('app', 'Femployeetypeid'),
            'FHIGHESTTECHPOSTID' => Yii::t('app', 'Fhighesttechpostid'),
            'FHIGHESTDEGREEID' => Yii::t('app', 'Fhighestdegreeid'),
            'FEMPLOYEECLASSIFYID' => Yii::t('app', 'Femployeeclassifyid'),
            'FDELETEDSTATUS' => Yii::t('app', 'Fdeletedstatus'),
            'FLCMRATIONLEVELID' => Yii::t('app', 'Flcmrationlevelid'),
            'FNATIONALITYID' => Yii::t('app', 'Fnationalityid'),
            'FCHECKSTATE' => Yii::t('app', 'Fcheckstate'),
            'FINDEX' => Yii::t('app', 'Findex'),
            'FEMPLOYTECHPOSTID' => Yii::t('app', 'Femploytechpostid'),
            'FHIGHESTSUBDEGREEID' => Yii::t('app', 'Fhighestsubdegreeid'),
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
            'FZDY20' => Yii::t('app', 'Fzdy20'),
            'FZDY21' => Yii::t('app', 'Fzdy21'),
            'FZDY22' => Yii::t('app', 'Fzdy22'),
            'FZDY23' => Yii::t('app', 'Fzdy23'),
            'FZDY24' => Yii::t('app', 'Fzdy24'),
            'FZDY25' => Yii::t('app', 'Fzdy25'),
            'FZDY26' => Yii::t('app', 'Fzdy26'),
            'FFULLNAMEPINGYIN' => Yii::t('app', 'Ffullnamepingyin'),
            'FSIMPLENAMEPINGYIN' => Yii::t('app', 'Fsimplenamepingyin'),
            'FISSTANDBY' => Yii::t('app', 'Fisstandby'),
            'FISSTANDBYCADRE' => Yii::t('app', 'Fisstandbycadre'),
            'FHIGHESTCOMPETENCYID' => Yii::t('app', 'Fhighestcompetencyid'),
            'FNAMEPINYIN' => Yii::t('app', 'Fnamepinyin'),
            'FNAMESHORTPINYIN' => Yii::t('app', 'Fnameshortpinyin'),
            'FREGRESIDENCEID' => Yii::t('app', 'Fregresidenceid'),
            'FHJADDRESS' => Yii::t('app', 'Fhjaddress'),
            'FIDCARDADDRESS' => Yii::t('app', 'Fidcardaddress'),
            'FHOMEPLACE' => Yii::t('app', 'Fhomeplace'),
            'FEFFDT' => Yii::t('app', 'Feffdt'),
            'FLEFFDT' => Yii::t('app', 'Fleffdt'),
            'FHISTORYRELATEID' => Yii::t('app', 'Fhistoryrelateid'),
            'FIDCARDBEGINDATE' => Yii::t('app', 'Fidcardbegindate'),
            'FIDCARDENDDATE' => Yii::t('app', 'Fidcardenddate'),
            'FEXTENDFIELDNUMONE' => Yii::t('app', 'Fextendfieldnumone'),
            'FPROTOCOL' => Yii::t('app', 'Fprotocol'),
            'FIDCARDISSUEORG' => Yii::t('app', 'Fidcardissueorg'),
            'CFTC' => Yii::t('app', 'Cftc'),
            'CFTSRYBSID' => Yii::t('app', 'Cftsrybsid'),
            'CFFXDW' => Yii::t('app', 'Cffxdw'),
            'CFGATXZ' => Yii::t('app', 'Cfgatxz'),
            'CFPTTXZ' => Yii::t('app', 'Cfpttxz'),
            'CFISJZZ' => Yii::t('app', 'Cfisjzz'),
            'CFJHSYQKID' => Yii::t('app', 'Cfjhsyqkid'),
            'CFZVCSNY' => Yii::t('app', 'Cfzvcsny'),
            'CFISGG' => Yii::t('app', 'Cfisgg'),
            'CFISQB' => Yii::t('app', 'Cfisqb'),
            'CFSBGXDW' => Yii::t('app', 'Cfsbgxdw'),
            'CFYHKXX' => Yii::t('app', 'Cfyhkxx'),
            'CFISXSCT' => Yii::t('app', 'Cfisxsct'),
            'CFRDYZNX' => Yii::t('app', 'Cfrdyznx'),
            'CFSXRQ' => Yii::t('app', 'Cfsxrq'),
            'CFJFSXRQ' => Yii::t('app', 'Cfjfsxrq'),
            'CFJFNX' => Yii::t('app', 'Cfjfnx'),
            'CFJFJZRQ' => Yii::t('app', 'Cfjfjzrq'),
            'CFGZD' => Yii::t('app', 'Cfgzd'),
            'CFRDTSJ' => Yii::t('app', 'Cfrdtsj'),
        ];
    }
}
