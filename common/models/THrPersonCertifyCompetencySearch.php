<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\THrPersonCertifyCompetency;

/**
 * THrPersonCertifyCompetencySearch represents the model behind the search form about `common\models\THrPersonCertifyCompetency`.
 */
class THrPersonCertifyCompetencySearch extends THrPersonCertifyCompetency
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FID', 'FCREATORID', 'FCREATETIME', 'FLASTUPDATEUSERID', 'FLASTUPDATETIME', 'FCONTROLUNITID', 'FOBTAINDATE', 'FFROMUNIT', 'FCERTIFICATENUMBER', 'FDESCRIPTION_L1', 'FDESCRIPTION_L2', 'FDESCRIPTION_L3', 'FPERSONID', 'FCERTIFIEDCOMPETENCYID', 'FHRORGUNITID', 'FZDY1', 'FZDY2', 'FZDY3', 'FZDY4', 'FZDY5', 'FZDY6', 'FZDY7', 'FZDY8', 'FZDY9', 'FZDY10', 'FZDY11', 'FZDY12', 'FZDY13', 'FZDY14', 'FAPPOINTUNIT', 'FAPPOINTDATE', 'FNAME_L1', 'FNAME_L2', 'FNAME_L3', 'FNUMBER', 'FSIMPLENAME', 'CFZGDJ', 'CFZCZSBH', 'CFZYZYZ', 'CFYXQ', 'CFZY', 'CFKSSJ', 'CFJSSJ', 'CFJXJY', 'CFJXJYZS', 'CFPXJYRQ', 'CFZSBGD', 'CFBGBH', 'CFPBM'], 'safe'],
            [['FISHIGHEST', 'FZDY15', 'FZDY16', 'FZDY17', 'FISHIGHESTCOMPETENCY', 'CFISJXJY'], 'integer'],
            [['FZDY18', 'FZDY19'], 'number'],
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
        $query = THrPersonCertifyCompetency::find();

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
            'FCREATETIME' => $this->FCREATETIME,
            'FLASTUPDATETIME' => $this->FLASTUPDATETIME,
            'FOBTAINDATE' => $this->FOBTAINDATE,
            'FISHIGHEST' => $this->FISHIGHEST,
            'FZDY5' => $this->FZDY5,
            'FZDY6' => $this->FZDY6,
            'FZDY7' => $this->FZDY7,
            'FZDY8' => $this->FZDY8,
            'FZDY15' => $this->FZDY15,
            'FZDY16' => $this->FZDY16,
            'FZDY17' => $this->FZDY17,
            'FZDY18' => $this->FZDY18,
            'FZDY19' => $this->FZDY19,
            'FISHIGHESTCOMPETENCY' => $this->FISHIGHESTCOMPETENCY,
            'CFKSSJ' => $this->CFKSSJ,
            'CFJSSJ' => $this->CFJSSJ,
            'CFISJXJY' => $this->CFISJXJY,
            'CFPXJYRQ' => $this->CFPXJYRQ,
        ]);

        $query->andFilterWhere(['like', 'FID', $this->FID])
            ->andFilterWhere(['like', 'FCREATORID', $this->FCREATORID])
            ->andFilterWhere(['like', 'FLASTUPDATEUSERID', $this->FLASTUPDATEUSERID])
            ->andFilterWhere(['like', 'FCONTROLUNITID', $this->FCONTROLUNITID])
            ->andFilterWhere(['like', 'FFROMUNIT', $this->FFROMUNIT])
            ->andFilterWhere(['like', 'FCERTIFICATENUMBER', $this->FCERTIFICATENUMBER])
            ->andFilterWhere(['like', 'FDESCRIPTION_L1', $this->FDESCRIPTION_L1])
            ->andFilterWhere(['like', 'FDESCRIPTION_L2', $this->FDESCRIPTION_L2])
            ->andFilterWhere(['like', 'FDESCRIPTION_L3', $this->FDESCRIPTION_L3])
            ->andFilterWhere(['like', 'FPERSONID', $this->FPERSONID])
            ->andFilterWhere(['like', 'FCERTIFIEDCOMPETENCYID', $this->FCERTIFIEDCOMPETENCYID])
            ->andFilterWhere(['like', 'FHRORGUNITID', $this->FHRORGUNITID])
            ->andFilterWhere(['like', 'FZDY1', $this->FZDY1])
            ->andFilterWhere(['like', 'FZDY2', $this->FZDY2])
            ->andFilterWhere(['like', 'FZDY3', $this->FZDY3])
            ->andFilterWhere(['like', 'FZDY4', $this->FZDY4])
            ->andFilterWhere(['like', 'FZDY9', $this->FZDY9])
            ->andFilterWhere(['like', 'FZDY10', $this->FZDY10])
            ->andFilterWhere(['like', 'FZDY11', $this->FZDY11])
            ->andFilterWhere(['like', 'FZDY12', $this->FZDY12])
            ->andFilterWhere(['like', 'FZDY13', $this->FZDY13])
            ->andFilterWhere(['like', 'FZDY14', $this->FZDY14])
            ->andFilterWhere(['like', 'FAPPOINTUNIT', $this->FAPPOINTUNIT])
            ->andFilterWhere(['like', 'FAPPOINTDATE', $this->FAPPOINTDATE])
            ->andFilterWhere(['like', 'FNAME_L1', $this->FNAME_L1])
            ->andFilterWhere(['like', 'FNAME_L2', $this->FNAME_L2])
            ->andFilterWhere(['like', 'FNAME_L3', $this->FNAME_L3])
            ->andFilterWhere(['like', 'FNUMBER', $this->FNUMBER])
            ->andFilterWhere(['like', 'FSIMPLENAME', $this->FSIMPLENAME])
            ->andFilterWhere(['like', 'CFZGDJ', $this->CFZGDJ])
            ->andFilterWhere(['like', 'CFZCZSBH', $this->CFZCZSBH])
            ->andFilterWhere(['like', 'CFZYZYZ', $this->CFZYZYZ])
            ->andFilterWhere(['like', 'CFYXQ', $this->CFYXQ])
            ->andFilterWhere(['like', 'CFZY', $this->CFZY])
            ->andFilterWhere(['like', 'CFJXJY', $this->CFJXJY])
            ->andFilterWhere(['like', 'CFJXJYZS', $this->CFJXJYZS])
            ->andFilterWhere(['like', 'CFZSBGD', $this->CFZSBGD])
            ->andFilterWhere(['like', 'CFBGBH', $this->CFBGBH])
            ->andFilterWhere(['like', 'CFPBM', $this->CFPBM]);

        return $dataProvider;
    }
}
