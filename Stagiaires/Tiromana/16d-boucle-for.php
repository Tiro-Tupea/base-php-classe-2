<?php

$nbre = mt_rand();

for ($i = 0; $i <= 100; $i++) {
    if($nbre % 7){
        echo "$i est un multiple de 7";
    }
}
    