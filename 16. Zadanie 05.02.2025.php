<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 05.02.20</title>
</head>
<body>

    <?php
    
        // r odczyt/początek pliku
        // r+ zapis/odczyt/początek pliku
        // w zapis/koniec pliku/zerowanie lub tworzenie
        // w+ zapis/odczyt/koniec pliku/zerowanie lub tworzenie
        // a zapis/koniec pliku/tworzenie
        // b - plik binarny

        // Zapis do pliku
        $c=200;
        $plik = fopen("liczby.txt", "w+");
        fputs($plik, "linia pierwsza\n"); //#10#13
        fputs($plik, "linia druga\n");
        fputs($plik, $c."\n");
        fclose($plik);

        echo "<br>Odczyt pliku linia po linii:<br><br>";
        $plik = fopen("liczby.txt", "r");
        while(!feof($plik)){ // EOF - end of file feof() - sprawdza czy wystąpił koniec pliku
            $linia = fgets($plik);
            echo $linia."<br>"; //." - jest typu ".gettype($linia).<br>";
        }
        fclose($plik);

        echo "<br>Odczyt pliku znak po znaku:<br><br>";
        $plik = fopen("liczby.txt","r");
        while($znak=fgetc($plik)){
            echo $znak;
            if($znak=="\n") echo "<br>";
        }
        fclose($plik);

        echo "<br><br>Odczyt całej zawartości pliku: <br><br>";
        $c = file_get_contents("liczby.txt");
        echo $c;

    ?>
    <?php
    
    // w pliku tekstowym znajdują się liczby po jednej w każdej linii, 
    // skrypt wyświetla te liczby, liczy sumę i średnią
    $plik_liczby = fopen("liczby_2.txt", "w+");
    echo "<br><br>";
    $sum = 0;
    for($i=0; $i<10; $i++){
        $num = rand(1, 10);
        // $numbers[] = $num;
        // fputs($plik_liczby, $numbers."\n");
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

        echo "<br>Suma = ".$sum;

    ?>
    
</body>
</html>