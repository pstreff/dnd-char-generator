<?php

namespace App\Domain\CharacterBuilder\CharacterStats;

use App\Domain\CharacterBuilder\Abilities;
use Facades\App\Domain\DiceRoller\DiceRoller;

class RandomStatsGenerator implements StatsGenerator
{
    public function generate()
    {
        /**
         * Roll four 6-sided dice and record the total of the highest three dice.
         * Do this five more times, so that we have six numbers.
         * Take the six numbers and write each number beside one of the character’s six abilities
         * to assign scores to Strength, Dexterity, Constitution, Intelligence, Wisdom , and Charisma.
         */

        $stats = Abilities::all();

        foreach ($stats as $stat) {
            $filledStats[$stat] = $this->getandSumRolls();
        }

        return $filledStats;
    }

    private function getandSumRolls()
    {
        $roll = DiceRoller::roll(4, 6); //Real-time Facade or Dependency Injection???

        rsort($roll);

        $highestThree = array_slice($roll,0, 3);

        return array_sum($highestThree);
    }
}