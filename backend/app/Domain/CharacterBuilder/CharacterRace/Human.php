<?php

namespace App\Domain\CharacterBuilder\CharacterRace;

use App\Domain\CharacterBuilder\Constants\Abilities;
use App\Domain\CharacterBuilder\Constants\Alignments;
use App\Domain\CharacterBuilder\Constants\Languages;
use Illuminate\Support\Arr;

class Human extends Race
{
    public function __construct()
    {
        $this->setAbilityScoreIncrease([
            Abilities::STR => 1,
            Abilities::DEX => 1,
            Abilities::CON => 1,
            Abilities::INT => 1,
            Abilities::WIS => 1,
            Abilities::CHA => 1
        ]);

        $this->setRandomAge(10, 100);
        $this->setAlignment(Alignments::all());
        $this->size = 'Medium';
        $this->speed = 30;

        $this->setLanguages([Languages::COMMON], Arr::random(Languages::allWithoutCommon(), 1));
    }
}