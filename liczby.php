<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edwin Piątek - Poprawa samodzielna </title>
</head>
<body>

<?php

    $board = array()
//losowanie 5 liczb od 0 do 20
    for($i=1; $i <=20; $i++) {
        $number = rand(1,20);
        array_push($board, $number);
        if($i%2!=1) {
//sprawdzanie czy liczba jest parzysta
            print_r("Liczba parzysta $i \n");
        } else {
            print_r("Liczba nieparzysta $i \n")
        }
    }
//obliczanie sumy liczb
    $sum = array_sum($board);
    print_r("Suma wylosowanych liczb: $sum");

?> 
</body>
</html>
