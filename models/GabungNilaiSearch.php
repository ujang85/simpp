<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GabungNilai;

/**
 * UnitkerjaSearch represents the model behind the search form about `app\models\Unitkerja`.
 */
class GabungNilaiSearch extends GabungNilai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nilai_disiplin', 'nilai_dedikasi', 'nilai_tanggungjawab', 'subtotal', 'tl', 'psw', 'tk', 'akumulasi1', 'akumulasi2'], 'integer'],
            [['rerata'], 'number'],
            [['nip_penilai'], 'string', 'max' => 30],
            [['penilai', 'pegawai_dinilai'], 'string', 'max' => 49],
            [['status'], 'string', 'max' => 27],
            [['jabatan'], 'string', 'max' => 66],
            [['nama_unit'], 'string', 'max' => 100],
            [['usulan'], 'string', 'max' => 200],
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
        $query = GabungNilai::find();

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
            'nip_penilai'=> $this->nip_penilai,
            'status'=> $this->status,
            'jabatan' => $this->jabatan,
            'nilai_disiplin'=> $this->nilai_disiplin,
            'nilai_dedikasi' => $this->nilai_dedikasi,
            'nilai_tanggungjawab'=> $this->nilai_tanggungjawab,
            'subtotal' => $this->subtotal,
            'rerata'=> $this->rerata,
            'tl' => $this->tl,
            'psw'=> $this->psw,
            'tk' => $this->tk,
            'akumulasi1'=> $this->akumulasi1,
            'akumulasi2' => $this->akumulasi2,
        ]);

        $query->andFilterWhere(['like', 'penilai', $this->penilai])
            ->andFilterWhere(['like', 'pegawai_dinilai', $this->pegawai_dinilai])
            ->andFilterWhere(['like', 'nama_unit', $this->nama_unit])
            ->andFilterWhere(['like', 'usulan', $this->usulan]);

        return $dataProvider;
    }
}
