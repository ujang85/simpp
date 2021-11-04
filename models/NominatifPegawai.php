<?php

namespace app\models;

use Yii;
/**
 * This is the model class for table "nominatif_pegawai".
 *
 * @property int $id
 * @property string $nama
 * @property int $unit_kerja
 * @property string $status
 * @property string $nip
 * @property string $jenis
 * @property string $pangkat
 * @property string $golongan
 * @property string $jabatan
 * @property string $pendidikan
 * @property string $alamat
 */
class NominatifPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nominatif_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_kerja'], 'integer'],
            [['nama'], 'string', 'max' => 49],
            [['status'], 'string', 'max' => 27],
            [['nip', 'pangkat'], 'string', 'max' => 20],
            [['jenis'], 'string', 'max' => 1],
            [['golongan'], 'string', 'max' => 5],
            [['jabatan'], 'string', 'max' => 66],
            [['pendidikan'], 'string', 'max' => 59],
            [['alamat'], 'string', 'max' => 102],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'unit_kerja' => 'Unit Kerja',
            'status' => 'Status',
            'nip' => 'Nip',
            'jenis' => 'Jenis',
            'pangkat' => 'Pangkat',
            'golongan' => 'Golongan',
            'jabatan' => 'Jabatan',
            'pendidikan' => 'Pendidikan',
            'alamat' => 'Alamat',
        ];
    }

    public function getUnit()
    {
        return $this->hasOne(Unitkerja::className(), [ 'id'=> 'unit_kerja']);
    }
    /**
     * {@inheritdoc}
     * @return NominatifPegawaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NominatifPegawaiQuery(get_called_class());
    }
}
