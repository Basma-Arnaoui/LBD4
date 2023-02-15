<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
    <link rel="stylesheet" href="style-EX6.css">
</head>
<body>
<?php

$website_categories = array(
    "WEB" => array(
        "PHP" => array("https://www.php.net/", "*****"),
        "HTML" => array("https://www.w3schools.com/html/default.asp", "****"),
        "JavaScript" => array("https://www.javascript.com/", "**"),
        "CSS" => array("https://www.w3schools.com/css/", "****")
    ),
    "DB" => array(
        "MySQL" => array("https://www.mysql.com/", "*****"),
        "PostgreSQL" => array("https://www.postgresql.org/", "*****"),
        "Oracle" => array("https://www.oracle.com/", "****"),
        "DB2" => array("https://www.ibm.com/products/db2", "****")
    )
);
echo '<br>';
foreach ($website_categories as $category => $languages) {
    echo '<span class="header">' . $category . '</span>';
    echo '<br>';
    foreach ($languages as $language => $url) {
        echo $language . ', ';
    }
    echo '<br>';
}
echo '<p>Suggested websites per category sorted by reviews: </p>';
foreach ($website_categories as $category => $languages) {
    echo '<span class="header">' . $category . '</span>';
    echo '<br>';

    for ($i = 5; $i >= 1; $i--) {
        foreach ($languages as $language => $url) {
            if (strlen($url[1]) == $i) {
                echo $language . ', ';
                echo '<br>';
            }
        }
    }

    echo '<br>';
}
?>

</body>
</html>