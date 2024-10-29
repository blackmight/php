<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 23.10.2024</title>

    <style>

    * {
        color: #f1f1f1
    }

    .left {
        background-color: #8ecae6;
        min-height: 100px;
        width: calc(33.3333% - 20px);
        float: left;
        border-radius: 10px;
        text-align: center;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .middle {
        background-color: #219ebc;
        min-height: 100px;
        width: calc(33.3333% - 20px);
        float: left;
        border-radius: 10px;
        text-align: center;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .right {
        background-color: #023047;
        min-height: 100px;
        width: calc(33.3333% - 20px);
        float: left;
        color: #f1f1f1;
        border-radius: 10px;
        text-align: center;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    </style>

</head>
<body>

<!-- 3 sekcje ugóry, jedna na dole. W sekcji po lewej, losujemy liczbę (1, 100), w środku suma wszystkich liczb i różnica, po prawej ugóry odchylenie standardowe
    na dole będzie 20 liczb losowych. -->

    <section class="left">

    <?php

        $random_numbers = [];

        for($i=0;$i<20;$i++){
            $random_numbers[] = rand(1, 100);
        }
    
        $a = rand(1, 100);

        echo $a;

    ?>

    </section>
<!---->
    <section class="middle">

    <?php
    
        $suma = array_sum($random_numbers);

        echo "Suma: " . $suma;
    
    ?>

    </section>
<!---->
    <section class="right">

    

    </section>
<!---->
    <section class="bottom">

        <?php

            foreach($random_numbers as $rand) {
                echo $rand." ";
            }

        ?>

    </section>
    
</body>
</html>