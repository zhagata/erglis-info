<?php

namespace app\modules\events\base;

use deele\devkit\db\ColumnNameTrait;
use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[\app\modules\events\models\EventTranslation]].
 *
 * @see \app\modules\events\models\EventTranslation
 */
class EventTranslationQuery extends ActiveQuery
{
    use ColumnNameTrait;

    /**
     * {@inheritdoc}
     * @return \app\modules\events\models\EventTranslation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\modules\events\models\EventTranslation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
