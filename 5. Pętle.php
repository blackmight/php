<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle 07.10.2024</title>

    <style>



    </style>

</head>
<body>

<section>

    <?php

        // phpinfo();
        // echo 'Biblioteka GD jest '.(extension_loaded('gd) ? 'dostępna' : 'niedostępna');
        // var_dump(gd_info())
        
        echo "<br>".rand(1, 30)."<br>";
        echo "<br>";
        $a = 10;
        echo $a++."<br>";   // $x++ postinrementacja, ++$x preinkrementacja
                            // $a-- postdekrementacja, --$a predekrementacja
                            // zwiększenie o 1, zmniejszenie o 1 wartości zmiennej

        echo $a."<br>";
        for($i=1;$i<11;$i++){
            if($i==5) continue;
            echo "$i ";
        }


        echo "<br>";
    
    ?>

</section>

<section>

    <?php
    
        $i = 1;
        do{
            echo "$i ";
            $i++;
            if ($i==7) break;
        }while($i<11);

        echo "<br>";
        $i=1;
        while($i<11)
        {
            echo "$i ";
            $i++;
        }

        echo "<br>";
        $tablica = ["a", "b", "c", "d"];
        foreach($tablica as $klucz){
            echo "$klucz ";
        }

        echo "<br>";
        $liczby[1]=100;
        $liczby[20]=1200.9;
        $liczby[300]=2;
        // print_r($liczby);

        var_dump($liczby);
        foreach($liczby as $klucz) {
            echo "$klucz ";
        }

        echo "<br>";
        for($i=0;$i<301;$i++){
            if(isset($liczby[$i])) echo $liczby[$i]." "
;        }

    ?>

</section>
    
</body>
</html>