<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 21.10.2024</title>

    <style>

        * {
            background-color: #0f0f0f;
            color: #f0f0f0;
            font-family: sans-serif;
            border-radius: 15px;
        }

        .header {
            background-color: #A1A0A0;
            width: 100%;
            height: 100px;
            font-size: 15px;
            text-align: center;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .right {
            background-color: #838282;
            width: 50%;
            height: 30px;
            float: left;
            text-align: center;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .left {
            background-color: #6F6F6F;
            width: 50%;
            height: 30px;
            float: left;
            text-align: center;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .bottom {
            width: 100%;
            height: 200px;
            font-size: 15px;
            background-color: #5A595A;
            text-align: center;
            align-items: center;
            justify-content: center;
            display: flex;
            clear: both;
        }

        .span {
            color: red;
            background-color: #5A595A;
        }

    </style>

</head>
<body>
<!-- 1 sekcja, losujemy 50 liczb (1, 100). Poniżej będą 2 sekcje, 
do jednej wartość a, do drugiej wartość a (warunek a < b)
na dole jeszcze jedna sekcja na całą szerokość w której wyświetlamy 
te same liczby co ugóry, tylko liczby z przedziału (a, b) zaznaczamy 
kolorem czerwonym  -->

<section class="header">

    <?php

        $random = [];

        for($i=0;$i<50;$i++){
            $random[] = rand(1, 100);
        }

        foreach($random as $rand) {
            echo $rand." ";
        }
    
    ?>

</section>

<section class="right">

    <?php
        
        $b = rand(1, 100);
        $a = rand(1, 100);
        
        if ($a > $b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }

        echo $b;

    ?>

</section>
<section class="left">

    <?php

        echo $a;

    ?>

</section>

<section class="bottom">

    <?php

    foreach($random as $rand) {

        if($rand > $a && $rand < $b){
            echo " <span class='span'>"." ".$rand." "."</span>";
        }
        else {
            echo $rand." ";
        }
    };
    
    ?>

</section>

</body>
</html>