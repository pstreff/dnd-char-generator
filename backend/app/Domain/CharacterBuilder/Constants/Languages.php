<?php

namespace App\Domain\CharacterBuilder\Constants;

class Languages
{
    const ABYSSAL = 'Abyssal';
    const AQUAN = 'Aquan';
    const AURAN = 'Auran';
    const CELESTIAL = 'Celestial';
    const COMMON = 'Common';
    const DEEP_SPEECH= 'Deep Speech';
    const DRACONIC = 'Draconic';
    const DRUIDIC = 'Druidic'; // druids only
    const DWARVISH = 'Dwarvish';
    const ELVISH = 'Elvish';
    const GIANT = 'Giant';
    const GNOMISH = 'Gnomish';
    const GOBLIN = 'Goblin';
    const GNOLL = 'Gnoll';
    const HALFLING = 'Halfling';
    const IGNAN = 'Ignan';
    const INFERNAL = 'Infernal';
    const ORC = 'Orc';
    const PRIMORDIAL = 'Primordial';
    const SYLVAN = 'Sylvan';
    const TERRAN = 'Terran';
    const UNDERCOMMON = 'Undercommonn';

    public static function all()
    {
        return array_merge(self::allWithoutCommon(), [self::COMMON]);
    }

    public static function allWithoutCommon()
    {
        return [
            self::ABYSSAL,
            self::AQUAN,
            self::AURAN,
            self::CELESTIAL,
            self::DEEP_SPEECH,
            self::DRACONIC,
            self::DWARVISH,
            self::ELVISH,
            self::GIANT,
            self::GNOMISH,
            self::GOBLIN,
            self::GNOLL,
            self::HALFLING,
            self::IGNAN,
            self::INFERNAL,
            self::ORC,
            self::PRIMORDIAL,
            self::SYLVAN,
            self::TERRAN,
            self::UNDERCOMMON,
        ];
    }

    public static function allForDruid()
    {
        return array_merge(self::all(), [self::DRUIDIC]);
    }
}