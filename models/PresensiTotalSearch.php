<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PresensiTotal;

/**
 * PresensiTotalSearch represents the model behind the search form about `app\models\PresensiTotal`.
 */
class PresensiTotalSearch extends PresensiTotal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tl', 'psw', 'tk'], 'integer'],
            [['nama_pegawai'], 'safe'],
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
        $query = PresensiTotal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tl' => $this->tl,
            'psw' => $this->psw,
            'tk' => $this->tk,
        ]);

        $query->andFilterWhere(['like', 'nama_pegawai', $this->nama_pegawai]);

        return $dataProvider;
    }
}
