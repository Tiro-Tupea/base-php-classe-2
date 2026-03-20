<?php

$nbr = mt_rand(0, 10);

$appreciation = "Appréciation : ";

switch ($nbr) {
    case 0:
    case ($nbr <= 3) :
        $appreciation.="Nul, étudie la prochaine fois";
    break;
    case ($nbr <= 5) :
        $appreciation.="Peut mieux faire";
    break;
    case ($nbr <= 7) :
        $appreciation.="Bien";
    break;
    case ($nbr <= 10) :
        $appreciation.="Très bien";
    break;
    default :
    $appreciation = " Erreur!!";
}

?>
<!-- 2em methode -->
<!-- // $nbr = mt_rand(0,10);

// $appreciation = "Appréciation : ";

// switch($nbr){
//     case 0:
//     case 1:
//     case 2:
//     case 3:
//         $appreciation.="Nul, étudie la prochaine fois";
//         break;
//     case 4:
//     case 5:
//         $appreciation.="Peut mieux faire";
//         break;
//     case 6:
//     case 7:
//         $appreciation.="Bien";
//         break;
//         default:
//         $appreciation.="Très bien";
// } -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exercices 15b</h1>

    <h2>Votre est cote est <?=$nbr?>/10</h2>
    <p><?=$appreciation?></p>
</body>
</html>

