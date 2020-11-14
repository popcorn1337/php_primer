<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAinpulacje stringami</title>
</head>
<body>
    <?php
    //concaty
    $phrase1 = 'Student who came late.';
    $phrase2 = 'In class, stand with Rock';
    echo $phrase1.'</br>';
    echo $phrase1." ".$phrase2;

    //manipulacja stringami - pierwszy znak stringa powiekszony
    $name = 'cyryllo el blazyca';
    echo '</br> Uppercase first letter: '.ucfirst($name).'</br>';
    //manipulacja stringami - pierwszy znak kazdego stringa powiekszony
    echo 'Uppercase first letter of each word: '.ucwords($name).'</br>';
    //manipulacja stringami - wszystko capsem
    echo 'Uppercase first letter of each word: '.strtoupper($name).'</br>';
    //manipulacja stringami - wszystko malymi literkami
    echo 'Uppercase first letter of each word: '.strtolower('TO CALE ZDANIE BYLO CALE ZAPISANE CAPSEM').'</br>';
    //manipulacja stringami - powetarzanie stringa
    echo 'Repeat string: '.str_repeat($name.' ',10).'</br>';
     //manipulacja stringami - substringi
     echo 'Substring: '.substr($name,0,5).'</br>';
      //manipulacja stringami - pozycja stringa
      echo 'Pozycja stringa "el" w "cyryllo el blazyca": '.strpos($name,'el').'</br>';
      //manipulacja stringami - reszta zdania zaczynajac od specyficznego stringa
      echo 'Szukamy stringa bl": '.strchr($name,'bl').'</br>';

    ?>
</body>
</html>