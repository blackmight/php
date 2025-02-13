<?php
//include("funkcje_moje.php"); - może zawierać plik
//require_once("abc.php"); - musi zawierać plik, inaczej błąd

function aaa(&$tablica) // & referencja
{
    $tablica[1]=100;
}

function razyDwa($a)
{
    $wynik=2*$a;
    return $wynik;
}

function mnozenie($a,$b,$c)
{
    return $a*$b*$c;
}

function cosTamLiczy()
{
    return razyDwa(3)*mnozenie(2,2,2);
}

function zmienNapis(&$napis){
    $napis = 'Ola ma kota';
    return "jakiś tekst";
}

function licz($f,$a=400,$z=100)
{
    return $a+$z+$f;
}

$tab=array();
$tab[1]=200;
echo $tab[1]."<br>";
aaa($tab);
echo $tab[1]."<br>";

$f=150;
echo razyDwa($f)*100;

echo "<br>".mnozenie(1,2,3);
echo "<br>".cosTamLiczy();

$a = "Ala ma kota";
echo "<br>".zmienNapis($a);
echo "<br>".$a;

echo "<br>".licz(4);
echo "<br>".licz(5);
?>