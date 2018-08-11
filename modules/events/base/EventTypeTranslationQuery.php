<?php

namespace app\modules\events\base;

/**
 * This is the ActiveQuery class for [[\app\modules\events\models\EventTypeTranslation]].
 *
 * @see \app\modules\events\models\EventTypeTranslation
 */
class EventTypeTranslationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\modules\events\models\EventTypeTranslation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\modules\events\models\EventTypeTranslation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
