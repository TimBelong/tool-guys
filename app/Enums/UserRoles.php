<?php

namespace App\Enums;

class UserRoles extends BaseEnum
{
    public const ADMIN = 'admin';
    public static $list
        = [
            self::ADMIN => 'Admin',
        ];

    public static function listData(): array
    {
        $result = [];
        foreach (static::$list as $index => $item) {
            $result[$index] = __($item);
        }

        return $result;
    }

    public static function getLabel($value)
    {
        if (!isset(self::$list[$value])) {
            return '';
        }

        return __(self::$list[$value]);
    }
}
