<?php

namespace App\Domain\CharacterBuilder\CharacterRace;

use Illuminate\Support\Arr;

abstract class Race
{
    protected $subRace;
    protected $abilityScoreIncrease;
    protected $age;
    protected $alignment;
    protected $size;
    protected $speed;
    protected $languages;
    protected $traits;
    protected $proficiencies;

    abstract public function __construct();

    protected function setAbilityScoreIncrease(array $asi)
    {
        $this->abilityScoreIncrease = $asi;
    }

    protected function setRandomAge(int $min, int $max)
    {
        $this->age = random_int($min, $max);
    }

    protected function setAlignment(array $possibleAlignments)
    {
        $this->alignment = Arr::random($possibleAlignments);
    }

    protected function setLanguages(array $default, array $additionals = [])
    {
        $this->languages = array_merge($default, $additionals);
    }
}