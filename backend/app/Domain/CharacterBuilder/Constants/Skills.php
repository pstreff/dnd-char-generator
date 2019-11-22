<?php

namespace App\Domain\CharacterBuilder\Constants;

class Skills
{
    const ACROBATICS = 'acrobatics';
    const ANIMAL_HANDLING = 'animal handling';
    const ARCANA = 'arcana';
    const ATHLETICS = 'athletics';
    const DECEPTION = 'deception';
    const HISTORY = 'history';
    const INSIGHT = 'insight';
    const INTIMIDATION = 'intimidation';
    const INVESTIGATION = 'investigation';
    const MEDICINE = 'medicine';
    const NATURE = 'nature';
    const PERCEPTION = 'perception';
    const PERFORMANCE = 'performance';
    const PERSUASION = 'persuasion';
    const RELIGION = 'religion';
    const SLEIGHT_OF_HAND = 'sleight of hand';
    const STEALTH = 'stealth';
    const SURVIVAL = 'survival';

    public static function all()
    {
        return [
            self::ACROBATICS,
            self::ANIMAL_HANDLING,
            self::ARCANA,
            self::ATHLETICS,
            self::DECEPTION,
            self::HISTORY,
            self::INSIGHT,
            self::INTIMIDATION,
            self::INVESTIGATION,
            self::MEDICINE,
            self::NATURE,
            self::PERCEPTION,
            self::PERFORMANCE,
            self::PERSUASION,
            self::RELIGION,
            self::SLEIGHT_OF_HAND,
            self::STEALTH,
            self::SURVIVAL,
        ];
    }
}