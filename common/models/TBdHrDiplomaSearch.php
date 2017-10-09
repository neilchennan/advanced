<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TBdHrDiploma;

/**
 * TBdHrDiplomaSearch represents the model behind the search form about `common\models\TBdHrDiploma`.
 */
class TBdHrDiplomaSearch extends TBdHrDiploma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FID', 'FNAME_L1', 'FNAME_L2', 'FNAME_L3', 'FNUMBER', 'FDESCRIPTION_L1', 'FDESCRIPTION_L2', 'FDESCRIPTION_L3', 'FSIMPLENAME', 'FCREATORID', 'FCREATETIME', 'FLASTUPDATEUSERID', 'FLASTUPDATETIME', 'FCONTROLUNITID', 'FDIPLOMATYPE'], 'safe'],
            [['FINDEX', 'FSTATE', 'FLEVELCODE'], 'integer'],
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
        $query = TBdHrDiploma::find();

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
            'FINDEX' => $this->FINDEX,
            'FCREATETIME' => $this->FCREATETIME,
            'FLASTUPDATETIME' => $this->FLASTUPDATETIME,
            'FSTATE' => $this->FSTATE,
            'FLEVELCODE' => $this->FLEVELCODE,
        ]);

        $query->andFilterWhere(['like', 'FID', $this->FID])
            ->andFilterWhere(['like', 'FNAME_L1', $this->FNAME_L1])
            ->andFilterWhere(['like', 'FNAME_L2', $this->FNAME_L2])
            ->andFilterWhere(['like', 'FNAME_L3', $this->FNAME_L3])
            ->andFilterWhere(['like', 'FNUMBER', $this->FNUMBER])
            ->andFilterWhere(['like', 'FDESCRIPTION_L1', $this->FDESCRIPTION_L1])
            ->andFilterWhere(['like', 'FDESCRIPTION_L2', $this->FDESCRIPTION_L2])
            ->andFilterWhere(['like', 'FDESCRIPTION_L3', $this->FDESCRIPTION_L3])
            ->andFilterWhere(['like', 'FSIMPLENAME', $this->FSIMPLENAME])
            ->andFilterWhere(['like', 'FCREATORID', $this->FCREATORID])
            ->andFilterWhere(['like', 'FLASTUPDATEUSERID', $this->FLASTUPDATEUSERID])
            ->andFilterWhere(['like', 'FCONTROLUNITID', $this->FCONTROLUNITID])
            ->andFilterWhere(['like', 'FDIPLOMATYPE', $this->FDIPLOMATYPE]);

        return $dataProvider;
    }
}
