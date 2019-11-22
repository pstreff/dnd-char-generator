<?php

namespace App\Domain\CharacterBuilder\CharacterRace;

use App\Domain\CharacterBuilder\Constants\Abilities;
use App\Domain\CharacterBuilder\Constants\Alignments;
use App\Domain\CharacterBuilder\Constants\Languages;
use Facades\App\Domain\DiceRoller\DiceRoller;
use Illuminate\Support\Arr;

class Dwarf extends Race
{
    public function __construct()
    {
        $this->setAbilityScoreIncrease([
            Abilities::CON => 2
        ]);

        $this->setRandomAge(10, 350);

        $this->alignment = $this->getRandomWeightedElement([
            Alignments::LG => 35,
            Alignments::NG => 20,
            Alignments::CG => 15,
            Alignments::LN => 20,
            Alignments::N => 15,
            Alignments::CN => 5,
            Alignments::LE => 5,
            Alignments::NE => 5,
            Alignments::CE => 5,
        ]);

        $this->size = 'Medium';
        $this->speed = 25;

        $this->traits = [
            'Darkvision',
            'Dwarven Resilience',
            'Dwarven Combat Training',
            'Tool Proficiency',
            'Stonecunning',
        ];

        $this->setLanguages([
            Languages::COMMON,
            Languages::DWARVISH
        ]);

        $this->proficiencies = [
            'Weapons' => [
                'Battleaxe',
                'Handaxe',
                'Throwing Hammer',
                'Warhammer',
            ],
            'Tools' => Arr::random([
                'Smiths tools',
                'Brewers supplies',
                'Masons tools'
            ]),
            'Skills' => []
        ];

        $this->selectSubRace();
    }

    private function selectSubRace()
    {
        if (DiceRoller::roll(1, 10)[0] > 5) {
            $this->hillDwarf();
        } else {
            $this->mountainDwarf();
        }
    }

    private function hillDwarf()
    {
        $this->subRace = 'Hill Dwarf';
        $this->setAbilityScoreIncrease(array_merge($this->abilityScoreIncrease, [Abilities::WIS => 1]));
        $this->traits = array_merge($this->traits, ['Dwarven Toughness']);
    }

    private function mountainDwarf()
    {
        $this->subRace = 'Mountain Dwarf';
        $this->setAbilityScoreIncrease(array_merge($this->abilityScoreIncrease, [Abilities::STR => 2]));
        $this->proficiencies = array_merge($this->proficiencies, ['Armor' => ['Light', 'Medium']]);
    }

    private function getRandomWeightedElement(array $weightedValues) {
        $rand = random_int(1, (int) array_sum($weightedValues));

        foreach ($weightedValues as $key => $value) {
            $rand -= $value;
            if ($rand <= 0) {
                return $key;
            }
        }
    }
}