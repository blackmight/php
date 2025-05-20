<!DOCTYPE html>
<html lang="pl">
<title>Formularz i baza</title>
<head>
    <title>Formularz i baza</title>
    <style>

    </style>
</head>

<body>
    <form action-baza_mysqli_z_formularz.php method=post>
    marka <input type=text name=marka ><br>
    cena <input type=number name=cena><br>
    kolor <input type=text name kolor required><br>
    rokprod <input type=number name=rokprod><br>
    <input type=submit value=Wyślij>
    <input type=reset value='Czyść dane'>
</form>
<?php
if (isset($_POST["marka"])){

    if (empty($_POST["marka"]) || empty($_POST["cena"])){
        echo "Brak danych";
        exit();
    }
    else{
        $marka=$_POST["marka"];
        $cena=$_POST["cena"];
        $kolor=$_POST["kolor"];
        $rokprod=$_POST["rokprod"];
        $pol=mysqli_connect("localhost", "root", "", "samochody");
        if (mysqli_connect_errno()) {
        echo "UWAGA:".mysqli_connect_error();
        exit();
    }

    $z="INSERT INTO auta (marka, cena, kolor, rokprod) VALUES ('$marka', $cena, '$kolor', $rokprod)";
    $w=mysqli_query($pol,$z);
    mysqli_close($pol);
    echo "Dane wysłane do bazy";
    header("Location: baza_mysqsli_z_formularz.php");
    }
}