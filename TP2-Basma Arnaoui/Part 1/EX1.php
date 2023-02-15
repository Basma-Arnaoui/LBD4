<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1</h1>
</body>
</html>
<?php
$list = [5,2,8,1,5,6,10,8,3,7];

echo "Display of the elements of the list : <br>";
foreach ($list as $elem){
    if ($elem === $list[9]){
        echo $elem;
    }
    else{
        echo $elem, '-';
    }
}
echo '<br><br>';
echo "Sorting the list and displaying the sorted list : <br>";
sort($list);
foreach ($list as $elem){
        echo $elem, '   ';
    
}
echo '<br><br>';
echo 'Removing duplicates : <br>';
$new_list = array();
foreach ($list as $elem){
    if (in_array($elem,$new_list)){
        
    }
    else{
        echo $elem, '  ';
        array_push($new_list, $elem);
    }
 
    
}

?>