<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TBdPerson;

/**
 * TBdPersonSearch represents the model behind the search form about `common\models\TBdPerson`.
 */
class TBdPersonSearch extends TBdPerson
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FID', 'FIDNUM', 'FNAME_L1', 'FNAME_L2', 'FNAME_L3', 'FNUMBER', 'FDESCRIPTION_L1', 'FDESCRIPTION_L2', 'FDESCRIPTION_L3', 'FSIMPLENAME', 'FBIRTHDAY', 'FEMAIL', 'FADDRESS_L1', 'FADDRESS_L2', 'FADDRESS_L3', 'FHOMEPHONE', 'FOFFICEPHONE', 'FCELL', 'FBACKUPCELL', 'FBACKUPEMAIL', 'FRTX', 'FIDCARDNO', 'FIDCARDADRESS_L1', 'FIDCARDADRESS_L2', 'FIDCARDADRESS_L3', 'FPASSPORTNO', 'FOLDNAME_L1', 'FOLDNAME_L2', 'FOLDNAME_L3', 'FNATIVEPLACE_L1', 'FNATIVEPLACE_L2', 'FNATIVEPLACE_L3', 'FCREATORID', 'FCREATETIME', 'FLASTUPDATEUSERID', 'FLASTUPDATETIME', 'FKACLASSFICATIONID', 'FWEDID', 'FHEALTHID', 'FPOLITICALFACEID', 'FSTANDINGID', 'FFOLKID', 'FBIRTHID', 'FCONTROLUNITID', 'FHRORGUNITID', 'FRESIDENCEPLACE', 'FEMPLOYEETYPEID', 'FHIGHESTTECHPOSTID', 'FHIGHESTDEGREEID', 'FEMPLOYEECLASSIFYID', 'FLCMRATIONLEVELID', 'FNATIONALITYID', 'FEMPLOYTECHPOSTID', 'FHIGHESTSUBDEGREEID', 'FZDY1', 'FZDY2', 'FZDY3', 'FZDY4', 'FZDY5', 'FZDY6', 'FZDY7', 'FZDY8', 'FZDY9', 'FZDY10', 'FZDY11', 'FZDY12', 'FZDY13', 'FZDY14', 'FZDY15', 'FZDY16', 'FZDY17', 'FZDY22', 'FZDY23', 'FZDY24', 'FZDY25', 'FFULLNAMEPINGYIN', 'FSIMPLENAMEPINGYIN', 'FHIGHESTCOMPETENCYID', 'FNAMEPINYIN', 'FNAMESHORTPINYIN', 'FREGRESIDENCEID', 'FHJADDRESS', 'FIDCARDADDRESS', 'FHOMEPLACE', 'FEFFDT', 'FLEFFDT', 'FHISTORYRELATEID', 'FIDCARDBEGINDATE', 'FIDCARDENDDATE', 'FEXTENDFIELDNUMONE', 'FPROTOCOL', 'FIDCARDISSUEORG', 'CFTC', 'CFTSRYBSID', 'CFFXDW', 'CFGATXZ', 'CFPTTXZ', 'CFJHSYQKID', 'CFZVCSNY', 'CFSBGXDW', 'CFYHKXX', 'CFSXRQ', 'CFJFSXRQ', 'CFJFNX', 'CFJFJZRQ', 'CFGZD', 'CFRDTSJ'], 'safe'],
            [['FGENDER', 'FSTATE', 'FHEIGHT', 'FBLOODTYPE', 'FLENOFACTUALSERVICE', 'FDELETEDSTATUS', 'FCHECKSTATE', 'FINDEX', 'FZDY20', 'FZDY21', 'FZDY26', 'FISSTANDBY', 'FISSTANDBYCADRE', 'CFISJZZ', 'CFISGG', 'CFISQB', 'CFISXSCT'], 'integer'],
            [['FZDY18', 'FZDY19', 'CFRDYZNX'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TBdPerson::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'FGENDER' => $this->FGENDER,
            'FBIRTHDAY' => $this->FBIRTHDAY,
            'FSTATE' => $this->FSTATE,
            'FHEIGHT' => $this->FHEIGHT,
            'FBLOODTYPE' => $this->FBLOODTYPE,
            'FCREATETIME' => $this->FCREATETIME,
            'FLASTUPDATETIME' => $this->FLASTUPDATETIME,
            'FLENOFACTUALSERVICE' => $this->FLENOFACTUALSERVICE,
            'FDELETEDSTATUS' => $this->FDELETEDSTATUS,
            'FCHECKSTATE' => $this->FCHECKSTATE,
            'FINDEX' => $this->FINDEX,
            'FZDY9' => $this->FZDY9,
            'FZDY10' => $this->FZDY10,
            'FZDY11' => $this->FZDY11,
            'FZDY12' => $this->FZDY12,
            'FZDY13' => $this->FZDY13,
            'FZDY14' => $this->FZDY14,
            'FZDY18' => $this->FZDY18,
            'FZDY19' => $this->FZDY19,
            'FZDY20' => $this->FZDY20,
            'FZDY21' => $this->FZDY21,
            'FZDY26' => $this->FZDY26,
            'FISSTANDBY' => $this->FISSTANDBY,
            'FISSTANDBYCADRE' => $this->FISSTANDBYCADRE,
            'FEFFDT' => $this->FEFFDT,
            'FLEFFDT' => $this->FLEFFDT,
            'FIDCARDBEGINDATE' => $this->FIDCARDBEGINDATE,
            'FIDCARDENDDATE' => $this->FIDCARDENDDATE,
            'CFISJZZ' => $this->CFISJZZ,
            'CFZVCSNY' => $this->CFZVCSNY,
            'CFISGG' => $this->CFISGG,
            'CFISQB' => $this->CFISQB,
            'CFISXSCT' => $this->CFISXSCT,
            'CFRDYZNX' => $this->CFRDYZNX,
            'CFSXRQ' => $this->CFSXRQ,
            'CFJFSXRQ' => $this->CFJFSXRQ,
            'CFJFJZRQ' => $this->CFJFJZRQ,
            'CFRDTSJ' => $this->CFRDTSJ,
        ]);

        $query->andFilterWhere(['like', 'FID', $this->FID])
            ->andFilterWhere(['like', 'FIDNUM', $this->FIDNUM])
            ->andFilterWhere(['like', 'FNAME_L1', $this->FNAME_L1])
            ->andFilterWhere(['like', 'FNAME_L2', $this->FNAME_L2])
            ->andFilterWhere(['like', 'FNAME_L3', $this->FNAME_L3])
            ->andFilterWhere(['like', 'FNUMBER', $this->FNUMBER])
            ->andFilterWhere(['like', 'FDESCRIPTION_L1', $this->FDESCRIPTION_L1])
            ->andFilterWhere(['like', 'FDESCRIPTION_L2', $this->FDESCRIPTION_L2])
            ->andFilterWhere(['like', 'FDESCRIPTION_L3', $this->FDESCRIPTION_L3])
            ->andFilterWhere(['like', 'FSIMPLENAME', $this->FSIMPLENAME])
            ->andFilterWhere(['like', 'FEMAIL', $this->FEMAIL])
            ->andFilterWhere(['like', 'FADDRESS_L1', $this->FADDRESS_L1])
            ->andFilterWhere(['like', 'FADDRESS_L2', $this->FADDRESS_L2])
            ->andFilterWhere(['like', 'FADDRESS_L3', $this->FADDRESS_L3])
            ->andFilterWhere(['like', 'FHOMEPHONE', $this->FHOMEPHONE])
            ->andFilterWhere(['like', 'FOFFICEPHONE', $this->FOFFICEPHONE])
            ->andFilterWhere(['like', 'FCELL', $this->FCELL])
            ->andFilterWhere(['like', 'FBACKUPCELL', $this->FBACKUPCELL])
            ->andFilterWhere(['like', 'FBACKUPEMAIL', $this->FBACKUPEMAIL])
            ->andFilterWhere(['like', 'FRTX', $this->FRTX])
            ->andFilterWhere(['like', 'FIDCARDNO', $this->FIDCARDNO])
            ->andFilterWhere(['like', 'FIDCARDADRESS_L1', $this->FIDCARDADRESS_L1])
            ->andFilterWhere(['like', 'FIDCARDADRESS_L2', $this->FIDCARDADRESS_L2])
            ->andFilterWhere(['like', 'FIDCARDADRESS_L3', $this->FIDCARDADRESS_L3])
            ->andFilterWhere(['like', 'FPASSPORTNO', $this->FPASSPORTNO])
            ->andFilterWhere(['like', 'FOLDNAME_L1', $this->FOLDNAME_L1])
            ->andFilterWhere(['like', 'FOLDNAME_L2', $this->FOLDNAME_L2])
            ->andFilterWhere(['like', 'FOLDNAME_L3', $this->FOLDNAME_L3])
            ->andFilterWhere(['like', 'FNATIVEPLACE_L1', $this->FNATIVEPLACE_L1])
            ->andFilterWhere(['like', 'FNATIVEPLACE_L2', $this->FNATIVEPLACE_L2])
            ->andFilterWhere(['like', 'FNATIVEPLACE_L3', $this->FNATIVEPLACE_L3])
            ->andFilterWhere(['like', 'FCREATORID', $this->FCREATORID])
            ->andFilterWhere(['like', 'FLASTUPDATEUSERID', $this->FLASTUPDATEUSERID])
            ->andFilterWhere(['like', 'FKACLASSFICATIONID', $this->FKACLASSFICATIONID])
            ->andFilterWhere(['like', 'FWEDID', $this->FWEDID])
            ->andFilterWhere(['like', 'FHEALTHID', $this->FHEALTHID])
            ->andFilterWhere(['like', 'FPOLITICALFACEID', $this->FPOLITICALFACEID])
            ->andFilterWhere(['like', 'FSTANDINGID', $this->FSTANDINGID])
            ->andFilterWhere(['like', 'FFOLKID', $this->FFOLKID])
            ->andFilterWhere(['like', 'FBIRTHID', $this->FBIRTHID])
            ->andFilterWhere(['like', 'FCONTROLUNITID', $this->FCONTROLUNITID])
            ->andFilterWhere(['like', 'FHRORGUNITID', $this->FHRORGUNITID])
            ->andFilterWhere(['like', 'FRESIDENCEPLACE', $this->FRESIDENCEPLACE])
            ->andFilterWhere(['like', 'FEMPLOYEETYPEID', $this->FEMPLOYEETYPEID])
            ->andFilterWhere(['like', 'FHIGHESTTECHPOSTID', $this->FHIGHESTTECHPOSTID])
            ->andFilterWhere(['like', 'FHIGHESTDEGREEID', $this->FHIGHESTDEGREEID])
            ->andFilterWhere(['like', 'FEMPLOYEECLASSIFYID', $this->FEMPLOYEECLASSIFYID])
            ->andFilterWhere(['like', 'FLCMRATIONLEVELID', $this->FLCMRATIONLEVELID])
            ->andFilterWhere(['like', 'FNATIONALITYID', $this->FNATIONALITYID])
            ->andFilterWhere(['like', 'FEMPLOYTECHPOSTID', $this->FEMPLOYTECHPOSTID])
            ->andFilterWhere(['like', 'FHIGHESTSUBDEGREEID', $this->FHIGHESTSUBDEGREEID])
            ->andFilterWhere(['like', 'FZDY1', $this->FZDY1])
            ->andFilterWhere(['like', 'FZDY2', $this->FZDY2])
            ->andFilterWhere(['like', 'FZDY3', $this->FZDY3])
            ->andFilterWhere(['like', 'FZDY4', $this->FZDY4])
            ->andFilterWhere(['like', 'FZDY5', $this->FZDY5])
            ->andFilterWhere(['like', 'FZDY6', $this->FZDY6])
            ->andFilterWhere(['like', 'FZDY7', $this->FZDY7])
            ->andFilterWhere(['like', 'FZDY8', $this->FZDY8])
            ->andFilterWhere(['like', 'FZDY15', $this->FZDY15])
            ->andFilterWhere(['like', 'FZDY16', $this->FZDY16])
            ->andFilterWhere(['like', 'FZDY17', $this->FZDY17])
            ->andFilterWhere(['like', 'FZDY22', $this->FZDY22])
            ->andFilterWhere(['like', 'FZDY23', $this->FZDY23])
            ->andFilterWhere(['like', 'FZDY24', $this->FZDY24])
            ->andFilterWhere(['like', 'FZDY25', $this->FZDY25])
            ->andFilterWhere(['like', 'FFULLNAMEPINGYIN', $this->FFULLNAMEPINGYIN])
            ->andFilterWhere(['like', 'FSIMPLENAMEPINGYIN', $this->FSIMPLENAMEPINGYIN])
            ->andFilterWhere(['like', 'FHIGHESTCOMPETENCYID', $this->FHIGHESTCOMPETENCYID])
            ->andFilterWhere(['like', 'FNAMEPINYIN', $this->FNAMEPINYIN])
            ->andFilterWhere(['like', 'FNAMESHORTPINYIN', $this->FNAMESHORTPINYIN])
            ->andFilterWhere(['like', 'FREGRESIDENCEID', $this->FREGRESIDENCEID])
            ->andFilterWhere(['like', 'FHJADDRESS', $this->FHJADDRESS])
            ->andFilterWhere(['like', 'FIDCARDADDRESS', $this->FIDCARDADDRESS])
            ->andFilterWhere(['like', 'FHOMEPLACE', $this->FHOMEPLACE])
            ->andFilterWhere(['like', 'FHISTORYRELATEID', $this->FHISTORYRELATEID])
            ->andFilterWhere(['like', 'FEXTENDFIELDNUMONE', $this->FEXTENDFIELDNUMONE])
            ->andFilterWhere(['like', 'FPROTOCOL', $this->FPROTOCOL])
            ->andFilterWhere(['like', 'FIDCARDISSUEORG', $this->FIDCARDISSUEORG])
            ->andFilterWhere(['like', 'CFTC', $this->CFTC])
            ->andFilterWhere(['like', 'CFTSRYBSID', $this->CFTSRYBSID])
            ->andFilterWhere(['like', 'CFFXDW', $this->CFFXDW])
            ->andFilterWhere(['like', 'CFGATXZ', $this->CFGATXZ])
            ->andFilterWhere(['like', 'CFPTTXZ', $this->CFPTTXZ])
            ->andFilterWhere(['like', 'CFJHSYQKID', $this->CFJHSYQKID])
            ->andFilterWhere(['like', 'CFSBGXDW', $this->CFSBGXDW])
            ->andFilterWhere(['like', 'CFYHKXX', $this->CFYHKXX])
            ->andFilterWhere(['like', 'CFJFNX', $this->CFJFNX])
            ->andFilterWhere(['like', 'CFGZD', $this->CFGZD]);

        return $dataProvider;
    }
}
