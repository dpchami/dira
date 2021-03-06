<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Purchase;

/**
 * PurchaseSearch represents the model behind the search form of `app\models\Purchase`.
 */
class PurchaseSearch extends Purchase
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'drink_id', 'quantity', 'amount', 'supplier_id', 'purchase_date', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['receipt', 'reference', 'confirmed_by'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Purchase::find();

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
            'id' => $this->id,
            'drink_id' => $this->drink_id,
            'quantity' => $this->quantity,
            'amount' => $this->amount,
            'supplier_id' => $this->supplier_id,
            'purchase_date' => $this->purchase_date,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'receipt', $this->receipt])
            ->andFilterWhere(['like', 'reference', $this->reference])
            ->andFilterWhere(['like', 'confirmed_by', $this->confirmed_by]);

        return $dataProvider;
    }
}
