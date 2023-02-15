<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 2 </h1>
</body>
</html>

<?php

echo "Affichage avec la boucle for : <br>";
$moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 
'Octobre', 'Novembre', 'Décembre'); 
for($i = 1; $i<=count($moisFr); $i++){
    echo $i, ' - ', $moisFr[$i], '<br>';

}
echo "<br>Affichage avec la boucle foreach : <br>";
foreach($moisFr as $i => $mois){
    echo $i, ' - ', $mois, '<br>';
}
$index = date('m');
echo "<br> Affichage du mois actuel : <br>";
foreach($moisFr as $i => $mois){
if ($i == $index){
    echo $mois;
}
}

$moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 13 =>'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); 
echo "<br><br>Affichage du problème : <br>";
for($i = 1; $i<=count($moisFr); $i++){
    echo $i, ' - ', $moisFr[$i], '<br>';

}
echo "<br>Résolution du problème : <br>";
$moisFr = array(1=>'Janvier',2 => 'Février',3 => 'Mars',4 => 'Avril',5 => 'Mai',6 => 'Juin', 13 =>'Juillet',8=> 'Aout',9=> 'Septembre',10=>'Octobre',11=> 'Novembre',12=> 'Décembre'); 
foreach($moisFr as $i => $mois){
    echo $i, ' - ', $mois, '<br>';
}

?>