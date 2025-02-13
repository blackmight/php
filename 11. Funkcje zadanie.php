<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #lewo
        {
            background-color: beige;
            width: 50%;
        }

        #prawo{
            background-color: lightblue;
            width: 50%;
            float: left;
        }

        .dol{
            background-color: lightgreen;
            width: 50%;
            float: left;
        }
    </style>
</head>
<body>
    <section id=lewo>
    <?php
    // 4 sekcje, 2 u gory, 2 na dole. w 1 20 liczb losowych (1-100), w 2 znowu 20 liczb losowych (1-100), w 3 suma tych liczb z 1 sekcji w 4 sekcji suma tych z 2 sekcji

    for ($i=0; $i < 20 ; $i++) { 
        $rand[]=rand(1,100);
        echo $rand[$i]." ";
    }
    ?>
    <section id=prawo>
    <?php
     for ($i=0; $i < 20 ; $i++) { 
        $rand2[]=rand(1,100);
        echo $rand2[$i]." ";
    }
    ?>
    </section>

    <section class=dol>
    <?php
    function suma(&$rand){
        $suma = 0;
        foreach ($rand as $liczby) {
            $suma+=$liczby;
        }
        return $suma;
    }

    $total = suma($rand);
    echo $total;

    ?>
    </section>
    <section class=dol>
    <?php
    function suma2(&$rand2){
        $suma = 0;
        foreach ($rand2 as $liczby2) {
            $suma2+=$liczby2;
        }
        return $suma2;
    }

    $total2 = suma($rand2);
    echo $total2;

    ?>
    </section>
</body>
</html>