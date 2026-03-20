

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$nbr = mt_rand(0, 10);
?>
<h1>Exercices 15</h1>
<p><?=$nbr?>/10</p>

<?php
if ($nbr <= 3):
?>

<p>Nul, étudie la prochaine fois</p>

<?php
elseif ($nbr <= 5):
?>

<p>Peut mieux faire</p>

<?php
elseif ($nbr <= 7):
?>
    <p>Bien</p> 
<?php
elseif ($nbr <= 10):
?>
    <p>Très bien</p>
<?php
else:
?>
<p>Erreur</p>
<?php
endif
?>
</body>
</html>


