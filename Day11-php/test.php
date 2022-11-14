<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hellow world</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="one">
        Welcome

        <h1>Hello <span style="color:red;">World</span></h1>

        <?php

        echo 'This is my first program in PHP';

        ?>
    </div>

    <div class="two">
        <p>IIST</p>
    </div>


    <div class="tree">
        <?php
        $num1=56;
        $num2='156';
        $result=$num1*$num2;

        echo 'The Multiplication = ' .$result;
        if($num1===$num2){
            echo '<br>True';
        }else{
            echo '<br>False <br>';
        }
        var_dump($num2);
        print_r('<br>'.$result .'<br>');


        $colors = array("red", "green", "blue", "yellow"); 

        foreach
        ($colors 
        as
        $x) {
        echo $x;
        }
        ?>
    </div>

    
</body>
</html>