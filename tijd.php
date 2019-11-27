<?php

$input = explode(" ", $argv[1]);

foreach ($input as $eenheid) {

    $karakter = substr($eenheid, -1);

    switch ($karakter) {
        case 'd':
            $dag = (int) $eenheid * 60 * 60 * 24;
            break;

        case 'u':
            $uur = (int) $eenheid * 60 * 60;            
            break;

        case 'm':
            $minuut = (int) $eenheid * 60;
            break;

        case 's':
            $seconden = (int) $eenheid;
            break;
    }
}

$output = $dag + $uur + $minuut + $seconden;

echo $output . " seconden";

?>