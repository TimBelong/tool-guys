<?php

namespace App\Enums;

class BaseEnum
{

    public static $list = [];

    public static function listData(): array
    {
        return static::$list;
    }

    public static function getLabel($value)
    {
        if ($value === null) {
            return null;
        }

        return static::$list[$value] ?? null;
    }

}
