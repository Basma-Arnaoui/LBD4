<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 4</title>
  <link rel="stylesheet" href="style-EX4.css">
</head>
<body>
  
  <h2>Table de multiplication</h2>
  <table border="1" class="table">

  <?php

echo '<tr>';
echo '<td class="orange-red"></td>';
$start = 2;
$end = 10;
foreach(range($start, $end) as $i) {
    echo '<td class="orange-red">'.$i.'</td>';
}
echo '</tr>';

$start = 2;
$end = 10;
$i = $start;
while($i <= $end){
    if($i%2 == 0){
        echo '<tr>';

        echo '<td class="orange-red">'.$i.'</td>';
        $j = 2;
        while($j <= $end){
            echo '<td class="yellow">'.($j * $i).'</td>';
            $j++;
        }
        echo '</tr>';

    }
    else{

        echo '<tr>';

        echo '<td class="orange-red">'.$i.'</td>';
        $j = 2;
        while($j <= $end){
            echo '<td class="orange">'.($j * $i).'</td>';
            $j++;
        }
        echo '</tr>';

    }
    $i++;
}

?>

  </table>
</body>
</html>