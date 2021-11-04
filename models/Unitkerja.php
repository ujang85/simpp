<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unitkerja".
 *
 * @property int $id
 * @property string $nama_unit
 */
class Unitkerja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unitkerja';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_unit'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_unit' => 'Nama Unit',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UnitkerjaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UnitkerjaQuery(get_called_class());
    }
}
