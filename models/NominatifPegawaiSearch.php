<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NominatifPegawai;

/**
 * NominatifPegawaiSearch represents the model behind the search form about `app\models\NominatifPegawai`.
 */
class NominatifPegawaiSearch extends NominatifPegawai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'unit_kerja'], 'integer'],
            [['unit_kerja','nama', 'status', 'nip', 'jenis', 'pangkat', 'golongan', 'jabatan', 'pendidikan', 'alamat'], 'safe'],
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
        $query = NominatifPegawai::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query ->joinWith('unit');
        $query->andFilterWhere([
            'id' => $this->id,
            'unit_kerja' => $this->unit_kerja,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'pangkat', $this->pangkat])
            ->andFilterWhere(['like', 'golongan', $this->golongan])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'pendidikan', $this->pendidikan])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
