<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 11.02.2025</title>
</head>
<body>

<!-- z pliku czytamy liczbę po jednej liczbie w linii, skrypt odczytuje tą liczbę i wyświetla je na ekranie, następnie średnią z tych liczb zapisuje do pliku średnia.txt -->

<?php

$plik_liczby = fopen("liczby_2.txt", "w+");
echo "Liczby: <br>";
$sum = 0;
for($i=0; $i<rand(1, 100); $i++){
    $num = rand(1, 150);
    $sum += $num;
    fputs($plik_liczby, $num."\n");
}
fclose($plik_liczby);

$file = fopen("liczby_2.txt", "r");
        while(!feof($file)){
            $linia = fgets($file);
            echo $linia."<br>";
        }
        fclose($file);

    echo "Suma:".$sum;
    echo "<br>";

$srednia_1 = $sum/$i;

$plik_srednia = fopen("średnia.txt", "w+");
fputs($plik_srednia, "Średnia tych liczb: ".$srednia_1);
fclose($plik_srednia);
$text = file_get_contents("średnia.txt");
echo $text;


// echo "Średnia: ".$srednia_2;



?>
    
</body>
</html>