<?php

namespace App\Domain\CharacterBuilder\Constants;

class Alignments
{
    const LG = 'Lawful Good';
    const NG = 'Neutral Good';
    const CG = 'Chaotic Good';
    const LN = 'Lawful Neutral';
    const N = 'Neutral';
    const CN = 'Chaotic Neutral';
    const LE = 'Lawful Evil';
    const NE = 'Neutral Evil';
    const CE = 'Chaotic Evil';

    public static function all()
    {
        return [
            self::LG,
            self::NG,
            self::CG,
            self::LN,
            self::N,
            self::CN,
            self::LE,
            self::NE,
            self::CE,
        ];
    }
}