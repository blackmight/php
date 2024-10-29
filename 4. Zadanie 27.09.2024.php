<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 27.09.2024</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>

        * {

            background-color: #fcb735;
            font-family: montserrat;

        }

        .lewa {

            background-color: #053363;
            width: 50%;
            height: 250px;
            float: left;
            text-align: center;
            justify-content: center;
            display: flex;

        }

        .prawa {

            background-color: #175b91;
            width: 50%;
            height: 250px;
            float: left;
            text-align: center;
            justify-content: center;
            display: flex;

        }

        .dolna {

            width: 100%;
            height: 250px;
            background-color: #40b0bf;
            text-align: center;
            justify-content: center;
            display: flex;
            color: red;

        }

    </style>
</head>
<body>

<?php
    # 3 parametry, n - ilość liczb, a dolna granica przedziału, b - górna granica przedziału. Skrypt losuje n liczb z przedziału a, b.
    # Wartości n,a,b wyświetlają się w sekcji lewej, wylosowane liczby w sekcji prawej
    ?>

<section class="lewa">
    <?php

if(!isset($_GET['n']) || !isset($_GET['a']) || !isset($_GET['b']))
{

    echo "Wartości n, a, b:<br>";
    exit();

}

if(empty($_GET['n']) || empty($_GET['a']) || empty($_GET['b']))
{

    echo "Brak wartości parametrów n, a lub ";
    exit();

}

$nn = $_GET['n'];
$aa = $_GET['a'];
$bb = $_GET['b'];

echo "Warości n, a, b:<br>";
echo "Wartość n = $nn<br>";
echo "Wartość a = $aa<br>";
echo "Wartość b = $bb<br>";

    ?>
</section>

<section class="prawa">

    <?php
    
        for ($i=0; $i<=$nn; $i++){
            echo(rand($aa, $bb)."<br>");
        }

    ?>

</section>

<section class="dolna">

    <?php
    
        # liczby równe wartości a + b / 2 wyświetlamy kolorem czerwonym (zaokrąglenie).

        echo(floatval($aa + $bb / 2)."<br>")
    
    ?>

</section>

</body>
</html>