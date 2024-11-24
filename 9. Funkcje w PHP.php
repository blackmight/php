<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <?php

    // include("funkcje_moje");
    // require_once("abc.php");

    function aaa(&$tablica) // $ referencja
    {
        $tablica[1]=100;
    }

    function razydwa($a){
        $wynik=2*$a;
        return $wynik;
    }

    function mnozenie($a, $b, $c){
        return $a*$b*$c;
    }

    function cosTamLiczy(){
        return razydwa(3)*mnozenie(2,2,2);
    }

    function zmienNapis(&$napis){
        $napis = "Ola ma kota";
        return "jakiś tekst";
    }

    function licz ($f,$a=400,$z=100){
        return $a+$z+$f;
    }

    $tab=[];
    $tab[1]=200;
    echo $tab[1]."<br>";
    aaa($tab);
    echo $tab[1]."<br>";

    $f=150;
    echo razydwa($f)*100;

    echo "<br>".mnozenie(1,2,3);
    echo "<br>".cosTamLiczy();

    // Wszystkie funkcje w PHP mają globalny zasięg - mogą być wykonane poza funkcją
    // nawet jeśli były zdefiniowane wewnątrz niej, i odwrotnie.
    // Informacja: Nazwy funkcji nie rozróżniają wielkości liter,
    // ale dobrym zwyczajem jest wywoływanie ich w formie, w której zostały zdefiniowane

    // Zazwyczaj przekazujemy argumenty do funkcji przez wartość. Możemy też przez 

    $a = "Ala ma kota";
    //var_dump($a);
    echo "<br>".zmienNapis($a);
    echo "<br>".$a;

    // wartości domyślne argumentów wywołania funkcji

    echo "<br>".licz(4);
    echo "<br>".licz(6);
    ?>
</body>
</html>