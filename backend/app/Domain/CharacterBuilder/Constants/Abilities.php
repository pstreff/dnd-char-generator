<?php

namespace App\Domain\CharacterBuilder\Constants;

class Abilities
{
    const STR = 'str';
    const DEX = 'dex';
    const CON = 'con';
    const INT = 'int';
    const WIS = 'wis';
    const CHA = 'cha';

    public static function all()
    {
        return [
            self::STR,
            self::DEX,
            self::CON,
            self::INT,
            self::WIS,
            self::CHA
        ];
    }
}