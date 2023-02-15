<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
<?php
    $urlTable = array(
        "PHP" => "http://www.php.net",
        "MySQL" => "http://www.mysql.org",
        "SQLite" => "http://www.sqlite.org",
        "HTML" => "https://www.w3schools.com/html/default.asp",
        "CSS" => "https://www.w3schools.com/css/default.asp"
    );

    $randomLinks = array_rand($urlTable, count($urlTable));
    echo "<p>Here are some random external links:</p>";
    foreach($randomLinks as $key) {
        $url = $urlTable[$key];
        echo "<p>The external link to {$key} is <a href='{$url}'>{$url}</a>.</p>";
    }

    echo "<p>================================================</p>";

    $randomKeys = array_rand($urlTable, 3); // Generate 3 random keys
    echo "<p>Here are some random external links:</p>";
    foreach($randomKeys as $key) {
        $url = $urlTable[$key];
        echo "<p>The external link to {$key} is <a href='{$url}'>{$url}</a>.</p>";
    }
?>

</body>
</html>