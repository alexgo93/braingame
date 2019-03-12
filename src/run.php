<?php

use function \cli\out;
use function \cli\input;

function run()
{
    out("What is your name? \n");
    $name = input();
    out("Hello, $name!\n");
}
