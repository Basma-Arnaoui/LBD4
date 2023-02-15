<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
<?php
    $l = array('Ahmed' => 14,
    'Jaoudia' => 19,
    'Samir' => 14,
    'Yasser' => 14.5,
    'Aya' => 12,
    'Ilham' => 16,
    'Yassine' => 17);

    foreach($l as $nom => $note) {
        echo "<p>Nom: {$nom}, Note = {$note} </p>";
    };


    echo "Displaying the table";

        echo '<table border="1">';
        echo '<tr><th>Nom</th><th>Note</th></tr>';
        foreach($l as $key => $value){
            echo '<tr>';
            
            echo '<td>'.$key.'</td>';
            echo '<td>'.$value.'</td>';

            echo '</tr>';
        }
        echo '</table>';
    arsort($l);
    foreach($l as $nom => $note) { 
        echo "<p>L'etudiant ayant la note la plus elevee est: {$nom}</p>";
        break;
    }
    asort($l);
    foreach($l as $nom => $note) {
        echo "<p>L'etudiant ayant la note la note minimale est: {$nom}</p>";
        break;
    }
    $length = count($l);
    $moy = 0;
    foreach($l as $nom => $note) {
        $moy += $note;
    }
    $moy /= $length;
    $moyArr = round($moy, 2);
    echo "<p>La moyenne de la classe est: $moyArr</p> ";

?>

</body>
</html>