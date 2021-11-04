<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[NominatifPegawai]].
 *
 * @see NominatifPegawai
 */
class NominatifPegawaiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return NominatifPegawai[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return NominatifPegawai|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
