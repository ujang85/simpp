<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "presensi_total".
 *
 * @property int $id
 * @property string $nama_pegawai
 * @property int $tl
 * @property int $psw
 * @property int $tk
 */
class PresensiTotal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'presensi_total';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tl', 'psw', 'tk'], 'integer'],
            [['nama_pegawai'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pegawai' => 'Nama Pegawai',
            'tl' => 'Tl',
            'psw' => 'Psw',
            'tk' => 'Tk',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PresensiTotalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PresensiTotalQuery(get_called_class());
    }
}
