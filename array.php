<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - arreje</title>
</head>
<body>
    <h1>Arrays (nie wiem jak to jest po polsku)</h2>
    <?php
    //zmienna 
    $num = 3;
    //array- tylko jeden typ danych
    $numbers = array(1,20,300,32,-22,1,0,-100,234);
    echo $numbers[2]; 
    echo '</br>';
    echo $numbers[0];
    echo '</br>';
    $size = count($numbers);
    echo "<p>Array size is: $size </p>";
   
    for($count = 0; $count < $size; $count++){
        echo "$numbers[$count]";
    }

    ?>
</body>
</html>