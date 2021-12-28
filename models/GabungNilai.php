<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gabung_nilai".
 *
 * @property int $id
 * @property string $nip_penilai
 * @property string $penilai
 * @property string $status
 * @property string $jabatan
 * @property string $pegawai_dinilai
 * @property string $nama_unit
 * @property int $nilai_disiplin
 * @property int $nilai_dedikasi
 * @property int $nilai_tanggungjawab
 * @property int $subtotal
 * @property string $rerata
 * @property int $tl
 * @property int $psw
 * @property int $tk
 * @property int $akumulasi1
 * @property int $akumulasi2
 * @property string $usulan
 */
class GabungNilai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gabung_nilai';
    }

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip_penilai' => 'NIP Penilai',
            'penilai' => 'Penilai',
            'status' => 'Status',
            'jabatan' => 'Jabatan',
            'pegawai_dinilai' => 'Pegawai Dinilai',
            'nama_unit' => 'Nama Unit',
            'nilai_disiplin' => 'Nilai Disiplin',
            'nilai_dedikasi' => 'Nilai Dedikasi',
            'nilai_tanggungjawab' => 'Nilai Tanggungjawab',
            'subtotal' => 'Subtotal',
            'rerata' => 'Rerata',
            'tl' => 'TL',
            'psw' => 'PSW',
            'tk' => 'TK',
            'akumulasi1' => 'Akumulasi1',
            'akumulasi2' => 'Akumulasi2',
            'usulan' => 'Usulan',
        ];
    }
    public function getPegawai()
    {
        return $this->hasOne(NominatifPegawai::className(), [ 'nama'=> 'pegawai_dinilai']);
    } 
    /**
     * {@inheritdoc}
     * @return GabungNilaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GabungNilaiQuery(get_called_class());
    }
}
