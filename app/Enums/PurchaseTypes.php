<?php

namespace App\Enums;

class PurchaseTypes extends BaseEnum
{
    public const PRODUCT = 'product';
    public const INVENTORY = 'inventory';
    public static $list
        = [
            self::PRODUCT => 'Product',
            self::INVENTORY => 'Inventory',
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
