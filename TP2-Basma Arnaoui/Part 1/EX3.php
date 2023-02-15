<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excercise 3</title>
</head>

<body>

  <?php

  $grades = array(12, 14.5, 16, 8, 11, 20, 5, 19, 17, 15, 13, 12, 17, 18.5, 6);
    function displaylist($list) {
      for ( $i = 1; $i <= count($list); $i++) {
      echo "Element $i: {$list[$i-1]} <br>" ;
      }
    }
  ?>

  <?php

  function mean($list) {
    $length = count($list);
    $sum = 0;
    foreach ($list as $elem) {
      $sum += $elem; 
    }
    return $sum / $length;
  }

  $mean = mean($grades);
  echo "The mean of the list is : $mean <br>" ;
  ?>

  <?php
  
    function valid($list) {
    $res = 0;
    foreach ($list as $elem) {
      if ($elem > 10)
        $res++;
    }
    return $res;
    }

  $gt10 = valid($grades);
  echo "The number of grades greater than 10 is: $gt10 <br>";
  ?>

  <?php

  function grade20($list) {
    $res = 0;
    foreach($list as $note) {
      if ($note == 20)
      $res++;
    }
    return $res;
  }

  $twenties = grade20($grades);
  echo "The nbr of students whose grade is 20 is: $twenties <br>";
  
  ?>

  <?php
  
  function swaplist($l, $i, $j) {
    $val1 = $l[$i];
    $val2 = $l[$j];
    $l[$i] = $val2;
    $l[$j] = $val1;
    return $l;
  }
  
  function sortlist($list) {
    for ($i = 0; $i < count($list); $i++) {
      for ($j = $i + 1; $j < count($list); $j++) {
        if ($list[$i] > $list[$j]) {
          swaplist($list, $i, $j);
        }
      }
    }
    return $list;
  }

  swaplist($grades, 0, 1);
  print_r($grades);
  ?>

  <?php

  function searchlist($list, $value) {
    for($i = 0; $i < count($list); $i++) {
      if ($list[$i] == $value) {
        echo "Index of element is: $i <br>";
        return $i;
      }
    }
    echo "Not found";
    return -1;
  }
  ?>

</body>

</html>