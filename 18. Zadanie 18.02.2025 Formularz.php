<?php

    //print_r($_POST); //var_dump($_POST)
    if(!isset($_POST['wiek'])) {
        echo "Formularz nie został poprawnie wysłany";
        exit();
    }
    if(!isset($_POST['wiek']) || empty($_POST['nazwisko'])){
        echo "Brak danych w formularze";
        exit();
    }
    // print_r($_POST);
    $wiek=$_POST['wiek'];
    $nazwisko=$_POST['nazwisko'];
    if(!isset($_POST['obecny'])) $obecny=$_POST['obecny'];
    else $obecny = "Nie zaznaczono";
    if(!isset($_POST['plec'])) $plec=$_POST['plec'];
    else $plec="Nie zaznaczono";
    $kolor = $_POST['kolor'];
    $opis = $_POST['opis'];
    echo "Wiek = $wiek<br>Nazwisko = $nazwisko<br>Obecny = $obecny<br>Płeć = $plec<br>Kolor = $kolor<br>Opis = $opis<br>";
    echo "<br>Wiek razy 2 = ".$wiek*2;

?>