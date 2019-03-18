<?php

use function \cli\out;
use function \cli\input;

function playGame($game)
{
        $gameData = $game();
        $rightAnswer = $gameData[0];
        $task = $gameData[1];
        out($task);
        $userAnswer = input();

    if ($userAnswer == $rightAnswer) {
        out('Congratulation!');
    } else {
        out("Your loose!");
        return false;
    }
}
