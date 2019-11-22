<?php

namespace App\Domain\DiceRoller;

class DiceRoller
{
    const ALLOWED_DICE = [2, 4, 6, 8, 10, 12, 20, 100, 1000];

    public function __construct()
    {
    }

    private function guard(int $amount, int $dice)
    {
        if (! in_array($dice, self::ALLOWED_DICE)) {
            throw new NonSupportedDiceException('Dice of type ' . $dice . ' not supported');
        }

        if ($amount <= 0) {
            throw new NumberOfDiceNotSupportedException('Amount of Dice to roll must be > 0');
        }
    }

    public function roll(int $amount, int $dice)
    {
        $this->guard($amount, $dice);

        $rolledResults = [];
        for ($i = 1; $i <= $amount; $i-=-1) {
            $rolled = random_int(1, $dice);
            array_push($rolledResults, $rolled);
        }

        return $rolledResults;
    }
}