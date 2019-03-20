<?php

use function \cli\out;
use function \cli\input;

const BEGIN = 1;
const END = 100;
const ROUNDS_FOR_WIN = 3;

function initialization($description, $game)
{
    out($description);
    $userName = getName();
    if (game($game)) {
        out("You win! Congratulation, $userName! \n");
    } else {
        out("You loose! Try again, $userName. \n");
    }
}

function game($game)
{
    for ($i = 0; $i < ROUNDS_FOR_WIN; $i++) {
        [$rightAnswer, $task] = $game();
        out($task);
        $userAnswer = input();

        if ($userAnswer == $rightAnswer) {
            out("You are right \n");
        } else {
            return false;
        }
    }
    return true;
}

function getName()
{
    out("What is your name? \n");
    $name = input();
    out("Hello, $name! \n");

    return $name;
}
