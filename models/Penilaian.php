<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penilaian".
 *
 * @property int $id
 * @property int $id_penilai
 * @property int $id_peg_dinilai
 * @property int $nilai_disiplin
 * @property int $nilai_dedikasi
 * @property int $nilai_tanggungjawab
 * @property string $usulan
 * @property string $tgl_input
 */
class Penilaian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip_penilai','user_input','id_penilai', 'id_peg_dinilai', 'nilai_disiplin', 'nilai_dedikasi', 'nilai_tanggungjawab'], 'integer'],
            [['tgl_input'], 'safe'],
            [['usulan'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penilai' => 'Penilai',
            'id_peg_dinilai' => 'Pegawai Yg Dinilai',
            'nilai_disiplin' => 'Nilai Disiplin',
            'nilai_dedikasi' => 'Nilai Dedikasi',
            'nilai_tanggungjawab' => 'Nilai Tanggungjawab',
            'usulan' => 'Usulan',
            'tgl_input' => 'Tgl Input',
        ];
    }
    public function getPenilai()
    {
        return $this->hasOne(NominatifPegawai::className(), [ 'id'=> 'id_penilai']);
    }
    public function getDinilai()
    {
        return $this->hasOne(NominatifPegawai::className(), [ 'id'=> 'id_peg_dinilai']);
    }
    /**
     * {@inheritdoc}
     * @return PenilaianQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PenilaianQuery(get_called_class());
    }
}
