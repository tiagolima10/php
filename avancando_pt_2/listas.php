<?php

$filmes = ['Avengers: Endgame', 'Captain Marvel', 'Homem-Formiga e a Vespa'];


$filmes[] = 'Avengers 5';
//echo $filmes[1];

for ($i = 0; $i <= 3; $i++) {
    echo "$filmes[$i]" . PHP_EOL;
}
