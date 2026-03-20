<?php

$nbr = mt_rand();

if ($nbr % 2 ) {
    echo "Le nombre {$nbr} est pair";
} else {
    echo "Le nombre {$nbr} est impair";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pair / Impaire</h1>
    <h2>Exercices 14</h2>

    <p>Créer 14-pair.php : générez aléatoirement entre 1 et 20 avec mt_rand(). S'il est pair, affichez "Le nombre X est pair", sinon "Le nombre X est impaire". Indice : utiliser l'opérateur modulo %</p>
<?php
$nombre = mt_rand(1, 20);

if ($nombre%2===0) {
    echo "$nombre est pair";
} else {
    echo "$nombre est impaire";
}

?>
    
</body>
</html>