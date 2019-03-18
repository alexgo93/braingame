<?php

use function \cli\out;
use function \cli\input;

function playGame($game)
{
    for ($i = 0; $i < 3; $i++) {
        $gameData = $game();
        $rightAnswer = $gameData[0];
        $task = $gameData[1];
        $userAnswer = input();

        if ($userAnswer === $rightAnswer) {
            out('Congratulation!');
        }
        return false;
    }
}
