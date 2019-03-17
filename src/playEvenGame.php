<?php

use function \cli\out;
use function \cli\input;

function playEvenGame()
{
    run();
    evenTask();
}


function evenTask()
{
    $digit = rand(0, 100);
    out("Is " . $digit . " Even?\n");
    $rightAnswer = isEven($digit) ? "yes" : "no";
    return playGame(evenTask(), $rightAnswer);
}


function isEven($digit)
{
    return $digit % 2 === 0;
}


/* function game()
{
    $digit = rand(1, 100);
    static $round = 0;

    while ($round < 3) {
        out("Is " . $digit . " Even?\n");
        $answer = input();
        if (isEven($digit) && $answer === 'yes' || !isEven($digit) && $answer === 'no') {
            $round++;
            out("Congratulation\n");
            return game();
        }
        $round = 0;
        out("Your loose! Want to try again? \n");
        $looseInput = input();
        if ($looseInput === 'yes') {
            return game();
        }
        return true;
    }
} */
