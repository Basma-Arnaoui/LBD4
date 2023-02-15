<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 4</title>
</head>

<body>
<?php
    echo "<br>Consider the following array:<br>";
    $numbers = array(13, 140, 141, 318, 197, 189, 112, 20, 130, 8, 192, 19, 9, 317, 210);

    displayArray($numbers);

    function sortDescending(array $arr){
        for($i = 0; $i < count($arr); $i++){
            $intermediate = $i;
            for($j = $i; $j < count($arr); $j++){
                if($arr[$intermediate] < $arr[$j]){
                    $intermediate = $j;
                }
            }
            $tmp = $arr[$i];
            $arr[$i] = $arr[$intermediate];
            $arr[$intermediate] = $tmp;
        }

        return $arr;
    }

    echo "<br>After sorting the array in descending order:<br>";
    displayArray(sortDescending($numbers));

    function displayArray($arr){
        foreach ($arr as $value) {
            echo "$value ";
        }
        echo "<br>";
    }
?>
</body>

</html>