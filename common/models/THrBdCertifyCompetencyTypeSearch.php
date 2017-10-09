<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\THrBdCertifyCompetencyType;

/**
 * THrBdCertifyCompetencyTypeSearch represents the model behind the search form about `common\models\THrBdCertifyCompetencyType`.
 */
class THrBdCertifyCompetencyTypeSearch extends THrBdCertifyCompetencyType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FID', 'FCREATORID', 'FCREATETIME', 'FLASTUPDATEUSERID', 'FLASTUPDATETIME', 'FCONTROLUNITID', 'FNAME_L1', 'FNAME_L2', 'FNAME_L3', 'FNUMBER', 'FDESCRIPTION_L1', 'FDESCRIPTION_L2', 'FDESCRIPTION_L3', 'FSIMPLENAME', 'FHRORGUNITID', 'FPARENTID', 'FLONGNUMBER', 'FDISPLAYNAME_L1', 'FDISPLAYNAME_L2', 'FDISPLAYNAME_L3'], 'safe'],
            [['FISSTANDARD', 'FISLEAF', 'FLEVEL', 'FSTATE', 'FINDEX'], 'integer'],
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
        $query = THrBdCertifyCompetencyType::find();

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
            'FISSTANDARD' => $this->FISSTANDARD,
            'FISLEAF' => $this->FISLEAF,
            'FLEVEL' => $this->FLEVEL,
            'FSTATE' => $this->FSTATE,
            'FINDEX' => $this->FINDEX,
        ]);

        $query->andFilterWhere(['like', 'FID', $this->FID])
            ->andFilterWhere(['like', 'FCREATORID', $this->FCREATORID])
            ->andFilterWhere(['like', 'FLASTUPDATEUSERID', $this->FLASTUPDATEUSERID])
            ->andFilterWhere(['like', 'FCONTROLUNITID', $this->FCONTROLUNITID])
            ->andFilterWhere(['like', 'FNAME_L1', $this->FNAME_L1])
            ->andFilterWhere(['like', 'FNAME_L2', $this->FNAME_L2])
            ->andFilterWhere(['like', 'FNAME_L3', $this->FNAME_L3])
            ->andFilterWhere(['like', 'FNUMBER', $this->FNUMBER])
            ->andFilterWhere(['like', 'FDESCRIPTION_L1', $this->FDESCRIPTION_L1])
            ->andFilterWhere(['like', 'FDESCRIPTION_L2', $this->FDESCRIPTION_L2])
            ->andFilterWhere(['like', 'FDESCRIPTION_L3', $this->FDESCRIPTION_L3])
            ->andFilterWhere(['like', 'FSIMPLENAME', $this->FSIMPLENAME])
            ->andFilterWhere(['like', 'FHRORGUNITID', $this->FHRORGUNITID])
            ->andFilterWhere(['like', 'FPARENTID', $this->FPARENTID])
            ->andFilterWhere(['like', 'FLONGNUMBER', $this->FLONGNUMBER])
            ->andFilterWhere(['like', 'FDISPLAYNAME_L1', $this->FDISPLAYNAME_L1])
            ->andFilterWhere(['like', 'FDISPLAYNAME_L2', $this->FDISPLAYNAME_L2])
            ->andFilterWhere(['like', 'FDISPLAYNAME_L3', $this->FDISPLAYNAME_L3]);

        return $dataProvider;
    }
}
