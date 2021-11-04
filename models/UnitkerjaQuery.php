<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Unitkerja]].
 *
 * @see Unitkerja
 */
class UnitkerjaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Unitkerja[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Unitkerja|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
