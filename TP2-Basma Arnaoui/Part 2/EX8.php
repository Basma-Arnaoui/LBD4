<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 8</title>
</head>

<body>

<?php
$courses = array(
  "Et123" => array("AB", "AC", array(
    "module1" => 2,
    "module2" => 2,
    "module3" => 2,
    "module4" => 12,
    "module5" => 12,
    "module6" => 12,
    "module7" => 2,
    "module8" => 15
  )),
  "Et676" => array("BC", "BD", array(
    "module1" => 2,
    "module2" => 5,
    "module3" => 5,
    "module4" => 6,
    "module5" => 8,
    "module6" => 8,
    "module7" => 2,
    "module8" => 10
  )),
  "Et998" => array("CD", "CE", array(
    "module1" => 17,
    "module2" => 17,
    "module3" => 2,
    "module4" => 0,
    "module5" => 0,
    "module6" => 2,
    "module7" => 2,
    "module8" => 8
  )),
  "Et764" => array("DE", "DF", array(
    "module1" => 2,
    "module2" => 16,
    "module3" => 16,
    "module4" => 13,
    "module5" => 13,
    "module6" => 2,
    "module7" => 9,
    "module8" => 6
  )),
);

foreach ($courses as $id => $course) {
  echo "Student $id : ";

  $min = "module1";
  $max = "module1";
  foreach ($course[2] as $module => $grade) {
    if ($grade > $course[2][$max]) {
      $max = $module;
    }
    if ($grade < $course[2][$min]) {
      $min = $module;
    }
  }
  $studentGrades = $course[2];
  echo "Best grade : $studentGrades[$max], Worst grade : $studentGrades[$min] <br>";
}
for ($i = 1; $i <= count($courses["Et123"][2]); $i++) {
  echo "For the course $i:  ";
  $max = 0;
  $min = 1000;
  $name = "module" . $i;
  foreach ($courses as $id => $course) {
    if ($course[2][$name] > $max) {
      $max = $course[2][$name];
    }
    if ($course[2][$name] < $min) {
      $min = $course[2][$name];
    }
  }

  echo "The maximum grade is : " . $max. ', and ';
  echo "the minimum grade is : " . $min;
  echo '<br>';
}
foreach ($courses as $id => $course) {
  echo "For the student $id : <br>";

  $mean = 0;
  foreach ($course[2] as $module => $grade) {
    $mean += $grade;
  }
  $mean /= count($course[2]);
  echo "The mean grade for this student is: " . $mean . '<br>';

  $median = 0;
  $grades = array_values($course[2]);
  sort($grades);
  $numGrades = count($grades);
  if ($numGrades % 2 == 0) {
  $median = ($grades[$numGrades / 2] + $grades[$numGrades / 2 - 1]) / 2;
  } else {
  $median = $grades[($numGrades - 1) / 2];
  }
  echo "The median grade for this student is: " . $median . '<br>';
  
  $mode = array_count_values($grades);
  arsort($mode);
  $modes = array_keys($mode);
  echo "The mode grade(s) for this student is/are: ";
  foreach ($modes as $index => $value) {
  if ($mode[$value] == $mode[$modes[0]]) {
  echo $value . " ";
  }
  }
  echo "<br><br>";
  }
  
  echo "For each course the number of students with passing grades: <br>";
  foreach ($courses as $id => $course) {
  $numPassing = 0;
  foreach ($course[2] as $module => $grade) {
  if ($grade >= 10) {
  $numPassing++;
  }
  }
  echo "For the course $id: " . $numPassing . "<br>";
  }
  
  ?>
</body>

</html>