<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 1</title>
</head>

<body>
  <?php
    // Question 1
    $age = array('Ahmed' => 34, 'Ikram' => 19, 'Imane' => 24);

    // Question 2
    foreach($ages as $key => $value) {
        echo "<p>{$key} a {$value} ans.</p>";
    }
    ?>
  <table border="1">
  <?php
    
      foreach($age as $key => $value){
          echo '<tr>';
          echo '<td>'.$key.'</td>';
          echo '<td>'.$value.'</td>';
          echo '</tr>';
      }
  ?>
  </table>

</body>

</html>