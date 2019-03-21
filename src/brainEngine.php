<?php

namespace Braingames\BrainEngine;

use function \cli\out;
use function \cli\input;

const ROUNDS_FOR_WIN = 3;

function initialization($description, $game)
{
    out("{$description} \n");
    out("What is your name? \n");
    $userName = input();
    out("Hello, {$userName}! \n");

    gameResult($userName, $game);
}

function game($game)
{
    for ($i = 0; $i < ROUNDS_FOR_WIN; $i++) {
        [$rightAnswer, $task] = $game();
        out($task);
        $userAnswer = input();

        if ($userAnswer == $rightAnswer) {
            out("You are right \n");
            continue;
        }
            return false;
    }
    return true;
}

function gameResult($userName, $game)
{
    if (game($game)) {
        out("You win! Congratulation, {$userName}! \n");
        return true;
    }
    out("You loose! Try again, {$userName}. \n");
}
