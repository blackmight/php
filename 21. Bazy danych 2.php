<?php

    // wszystkie zapytania oprócz select
    $pol = mysqli_connect("localhost","root","liczby");
    if (mysqli_connect_errno()) {
        echo "UWAGA: ".mysqli_connect_error();
        exit();
    }
    $z = "INSERT INTO dane(nazwa, wartosc) VALUES ('abcdef', 55555)";
    $w = mysqli_query($pol, $z);
    echo $w;
    mysqli_close($pol);
    echo "Dane wstawione do bazy";

?>