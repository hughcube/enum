<?php

namespace HughCube\Enum;

/**
 * Class GenderEnum
 * @package common\constants
 *
 * @method static boolean isNone(string | int $type)         检查是否为none
 * @method static boolean isMale(string | int $type)         检查是否为male
 * @method static boolean isFemale(string | int $type)       检查是否为female
 * @method static boolean isOther(string | int $type)        检查是否为other
 */
class GenderEnum extends Enum
{
    const NONE   = '0';
    const MALE   = '1';
    const FEMALE = '2';
    const OTHER  = '3';

    /**
     * @inheritDoc
     */
    public static function labels()
    {
        return [
            static::NONE => ['title' => 'none', 'name' => 'none', 'is_default' => true, 'can_select' => false],
            static::MALE => ['title' => '男', 'name' => 'male'],
            static::FEMALE => ['title' => '女', 'name' => 'female'],
            static::OTHER => ['title' => '其他', 'name' => 'other'],
        ];
    }
}
