<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PresensiTotal]].
 *
 * @see PresensiTotal
 */
class PresensiTotalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PresensiTotal[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PresensiTotal|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
