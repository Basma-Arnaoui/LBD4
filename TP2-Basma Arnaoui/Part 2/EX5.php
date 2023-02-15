<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5</title>

</head>
<body>
<?php 
    $capitalCities = array(
        'Maroc' => 'Rabat',
        'Allemagne' => 'Berlin',
        'Serbie' => 'Belgrade',
        'Bresil' => 'Brasilia',
        'Slovaquie' => 'Bratislava',
        'Italie' => 'Rome',
        'Venezuela' => 'Caracas',
        'Moldavie' => 'Chisinau',
        'Guyana' => 'Georgetown', 
        'Viet Nam' => 'Hanoi',
        'Zimbabwe' => 'Harare',
        'Cuba' => "La Havane",
        'Pays-Bas' => 'La Haye',
        'Finlande' => 'Helsinki'
    );

    print_r($capitalCities);

    echo '<table border="1">';
    echo '<tr><th>Country</th><th>Capital</th></tr>';

    foreach($capitalCities as $country => $capital) {
        echo '<tr>';
        echo '<td>'.$country.'</td>';
        echo '<td>'.$capital.'</td>';
        echo '</tr>';
    }

    echo '</table>';

    echo '<br>';
    echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
    echo '<br>';
    echo '<div class="flex-container">';
    echo '<input type="text" name="test" id="test" /><br/>';
    echo '<input type="submit" name="submit" id="submit">';
    echo '</div>';
    echo '</form>';

    if (isset($_POST['submit'])) {
        if (isset($_POST['test'])) {
            $country = $_POST['test'];
            $capitalFound = false;

            foreach($capitalCities as $key => $value) {
                if ($key === $country) {
                    echo "The capital of the country is:  $value";
                    $capitalFound = true;
                    break;
                }
            }

            if (!$capitalFound) {
                echo "This capital is not available..";
            }
        }
    }
?>
>

</body>
</html>