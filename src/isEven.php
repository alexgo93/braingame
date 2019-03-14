<?php

use function \cli\out;
use function \cli\input;

function isEvenGame()
{
    $digit = rand(1, 100);
    static $counter = 0;

    while ($counter < 3) {
        out("Is " . $digit . " Even?\n");
        $answer = input();
        if (isEven($digit) && $answer === 'yes') {
            $counter++;
            return isEvenGame();
        } elseif (!isEven($digit) && $answer === 'no') {
            $counter++;
            return isEvenGame();
        } else {
            $counter = 0;
            out("Your loose! Want to try again? \n");
            $looseInput = input();
            if ($looseInput === 'yes') {
                return isEvenGame();
            }
            return false;
        }
    }
    out("Congratulation, you win!\n");
    return true;
}



function isEven($digit)
{
    return $digit % 2 == 0;
}
