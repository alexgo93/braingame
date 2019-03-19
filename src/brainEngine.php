<?php

use function \cli\out;
use function \cli\input;

function playGame($game, $description)
{
    out($description);
    for ($i = 0; $i < 3; $i++) {
        $gameData = $game();
        $rightAnswer = $gameData[0];
        $task = $gameData[1];
        out($task);
        $userAnswer = input();

        if ($userAnswer == $rightAnswer) {
            out("Congratulation! \n");
        } else {
            out("Your loose!\n");
            return false;
        }
    }
}
