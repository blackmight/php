<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td{
        background-color: beige; 
    }
    .wykres{
        min-height:10px;
    }
    .wykres1{
        width:500px;
        display:flex;
        justify-content: flex-end;
    }
</style>
<body>
    <?php
    // (3x^3 - 2x^2 y od - 10 do 10, dane na wykresie)


function funkcja($x) {
    return (3 * $x) ** 3 - (2 * $x) ** 2;

}

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Liczba</th>";


for ($i = -10; $i <= 10; $i++) {
    echo "<th>$i</th>";
}

echo "</tr><tr><td>Wynik funkcji</td>";


for ($i = -10; $i <= 10; $i++) {
    $wynik = funkcja($i);
    echo "<td>$wynik</td>";
}

echo "</tr></table>";

for ($i = -10; $i <= 10; $i++) {
    $wynik = funkcja($i);
    if($wynik<0)
    {
        echo "<div class=wykres1>";
        echo "<div class=wykres style='width: ".(abs($wynik/100))."px; background-color: rgb(".rand(1,255).",123,132);'>$wynik</div>";
        echo "</div>";
    }
    else
    {
        echo "<div class=wykres style='width: ".(abs($wynik/100))."px; background-color: rgb(".rand(1,255).",123,132); margin-left: 500px;'>$wynik</div>";
    }
}


    ?>
  
</body>
</html>