<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penilaian;

/**
 * PenilaianSearch represents the model behind the search form about `app\models\Penilaian`.
 */
class PenilaianSearch extends Penilaian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_input','id', 'id_penilai', 'id_peg_dinilai', 'nilai_disiplin', 'nilai_dedikasi', 'nilai_tanggungjawab'], 'integer'],
            [['usulan', 'tgl_input'], 'safe'],
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
        $query = Penilaian::find();

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
            'id_penilai' => $this->id_penilai,
            'id_peg_dinilai' => $this->id_peg_dinilai,
            'nilai_disiplin' => $this->nilai_disiplin,
            'nilai_dedikasi' => $this->nilai_dedikasi,
            'nilai_tanggungjawab' => $this->nilai_tanggungjawab,
            'tgl_input' => $this->tgl_input,
        ]);

        $query->andFilterWhere(['like', 'usulan', $this->usulan]);

        return $dataProvider;
    }
}
