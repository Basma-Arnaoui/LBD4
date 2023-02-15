<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 7</title>
</head>
<body>
Exercice 7:

                
<?php
    
    $students = array("Et123" => array("AB", "AC", 17),
                      "Et676" => array("BC", "BD", 12),
                      "Et998" => array("CD", "CE", 9),
                      "Et764" => array("DE", "DF", 16.5));
    foreach($students as $code => $info){
        echo "Code : ".$code." Nom : ".$info[0]." Prenom : ".$info[1]." Moyenne : ".$info[2]."<br>";
    }

    $highest_grade_student_code = "Et123";
    foreach($students as $code => $info){
        if($info[2] > $students[$highest_grade_student_code][2]){
            $highest_grade_student_code = $code; 
        }
    }
    echo "<p>L'etudiant ayant la note la plus élevée : </p>";
    echo "Code : ".$highest_grade_student_code." Nom : ".$students[$highest_grade_student_code][0]." Prenom : ".$students[$highest_grade_student_code][1]." Moyenne : ".$students[$highest_grade_student_code][2]."<br>";

    $passing_student_code = "";
    foreach($students as $code => $info){
        if($info[2] >= 10){
            $passing_student_code = $code;
            break;
        }
    }

    foreach($students as $code => $info){
        if( $info[2] > 10 and ($info[2] < $students[$passing_student_code][2])){
            $passing_student_code = $code; 
        }
    }
    echo "<p>L'étudiant ayant la note min mais qui a validé l'année est: </p>";
    echo "Code : ".$passing_student_code." Nom : ".$students[$passing_student_code][0]." Prenom : ".$students[$passing_student_code][1]." Moyenne : ".$students[$passing_student_code][2]."<br>";

    
    echo "<p>Le(s) étudiant(s) n'ayant pas validé l'année:</p>";
    foreach($students as $code => $info){
        if($info[2] < 10){
            echo "$code, ";
        }
    }

?>

</body>
</html>