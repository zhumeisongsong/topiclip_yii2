<?php

namespace app\models;

use yii\db\ActiveRecord;

class Contact extends ActiveRecord
{
    public static function product()
    {
        return 'product';
    }
}
