<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 5</title>
  <link rel="stylesheet" href="style-EX5.css">
</head>

<body>

  <div class="container">
    <h4>Tableau de couleurs</h4>
    <div class="table">
      <div class="grid-container">
        <?php
      $colors = array('yellow', 'blue', 'red', 'purple', 'black', 'orange', 'cian', 'aqua', 'bisque', 'blueviolet');
      
      foreach($colors as $color) {
        echo "<div class='item' style='background:{$color};'></div>";
      }
      ?>
      </div>
    </div>
  </div>

  <?php 
  // Question 2
    function checkColorExists($colorList, $color) {
      if (in_array($color, $colorList)) {
        echo "The color $color is in the color list.<br>";
        return true;
      }
      echo "The color $color is not in the color list.<br>";
      return false;
    }

    // Question 3
    function getColorIndex($colorList, $color) {
      $result = array_search($color, $colorList);
      if ($result !== false) {
        echo "The color $color exists in the color list with index: $result.<br>";
        return $result;
      } else {
        echo "The color $color is not in the color list.<br>";
        return -1;
      } 
    }
?>


</body>

</html>