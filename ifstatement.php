<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP primer - if'y!</title>
</head>
<body>
    <?php 
        //An If statement that will carry out an action based on the value of the variable.
        echo "ify!";

        $grade=50;

        if($grade >= 51){
            
            echo'<h3 style="color: RED">NIE ZDALES!</h3>';
        }
        else{
            echo '<h3 style="color: GREEN">ZDALES!</h3>';
        }
        $grade= 'B';
        if($grade=='A'){
            echo'<h2 style"color: GREEN">YOU ARE A SUPERSTAR</h2>';

        }
        elseif($grade == 'B'){
            echo'<h2>YOU DID WELL!</h2>';
        }
    ?>
</body>
</html>