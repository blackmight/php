<?php

    $a = 100.45; // zmienna
    var_dump($a);
    echo "<br>";
    print_r($a);
    echo "<br>a = $a"."<br>";
    $b = "Ala ma kota";
    echo $b."<br>";
    var_dump($b);
    echo "<br>";
    $c = false;
    var_dump($c);
    define("zzz", 300); // stała zmienna (brak znaku $)
    echo "<br>".(zzz*2)."<br>";
    echo "<strong>Wartość</strong> a = $a<br>";
    echo 'Wartosść a = $a<br>';
    echo "Wartość".$a."<br>".$b."<br";
    print($a);
    //phpinfo(); - wyświetla informacje serwera PHP

?>