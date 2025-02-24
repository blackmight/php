<?php

    if(!isset($_POST['wielkosc_czcionki'])) {
        echo "Formularz nie został poprawnie wysłany";
        exit();
    }
    if(!isset($_POST['wielkosc_czcionki']) || empty($_POST['napis'])){
        echo "Brak danych w formularze";
        exit();
    }

    $napis = $_POST['napis'];
    $kolor = $_POST['kolor'];
    $wielkosc_czcionki = $_POST['wielkosc_czcionki'];
    
    if(!isset($_POST['strong'])) {
        echo "<p style='font-size:".$wielkosc_czcionki."px; color: ".$kolor.";'>".$napis."</p>";
    }
    else echo "<p style='font-size: ".$wielkosc_czcionki."px; color: ".$kolor.";'><strong>".$napis."</strong></p>";

?>