<?php

use function \cli\out;
use function \cli\input;

function isEvenGame()
{
    $digit = rand(1, 100);
    static $round = 0;

    while ($round < 3) {
        out("Is " . $digit . " Even?\n");
        $answer = input();
        if (isEven($digit) && $answer === 'yes') {
            $round++;
            return isEvenGame();
        } elseif (!isEven($digit) && $answer === 'no') {
            $round++;
            return isEvenGame();
        }
            $round = 0;
            out("Your loose! Want to try again? \n");
            $looseInput = input();
        if ($looseInput === 'yes') {
            return isEvenGame();
        }
            return true;
    }
    out("Congratulation, you win!\n");
    return true;
}



function isEven($digit)
{
    return $digit % 2 == 0;
}
