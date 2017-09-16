<?php

namespace app\models\query;
use \yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[\app\models\ClientData]].
 *
 * @see \app\models\ClientData
 */
class ClientDataQuery extends ActiveQuery
{
    public function between($dateStart, $dateEnd)
    {
        $this->where(['between', 'created_at', $dateStart, $dateEnd]);
        return $this;
    }

    /**
     * @inheritdoc
     * @return \app\models\ClientData[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\ClientData|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
