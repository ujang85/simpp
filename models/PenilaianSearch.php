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
  //  public $id_unitkerja;
    public $nama2;
    public function rules()
    {
        return [
            [['user_input','id',  'id_peg_dinilai', 'nilai_disiplin', 'nilai_dedikasi', 'nilai_tanggungjawab'], 'integer'],
            [['id_unitkerja','usulan', 'nama2','tgl_input'], 'safe'],
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
       $query ->joinWith('divisi');
        $query ->joinWith('dinilai');
        $query->andFilterWhere([
            'id' => $this->id,
            'id_unitkerja' => $this->id_unitkerja,
        //    'id_peg_dinilai' => $this->id_peg_dinilai,
            'nilai_disiplin' => $this->nilai_disiplin,
            'nilai_dedikasi' => $this->nilai_dedikasi,
            'nilai_tanggungjawab' => $this->nilai_tanggungjawab,
            'tgl_input' => $this->tgl_input,
        ]);

        $query->andFilterWhere(['like', 'usulan', $this->usulan]);
     //   $query->andFilterWhere(['like', 'nama', $this->nama]);
        $query->andFilterWhere(['like', 'nama2', $this->nama2]);

        return $dataProvider;
    }
}
