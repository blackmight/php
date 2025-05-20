<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 08.04.2025</title>
</head>

<style>

    body {
        min-height: 800px;
        justify-content: center;
        justify-items: center;
        align-items: center;
        display: flex;
    }

    .container {
        max-width: 950px;
        justify-content: center;
        justify-items: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    #two {
        max-width:800px;
        height: auto;
        background-color: green;
        justify-content: center;
        justify-items: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

</style>

<body>

<!-- Baza danych 'osoby' - 'imię', 'nazwisko', 'rok urodzenia (sam rok)', 'wzrost' -->

        <!-- Jest 3 sekcji, w 1 sekcji jest formularz dodajemy osoby do bazy -->
        <!-- w 2 sekcji jest formularz, który wyszukuje osoby o danym wzroście -->
        <!-- w 3 sekcji wyświetlają się wszystkie dane -->

<section class="container">
    <section id="one">
        <form action="23. Zadanie 08.04.2025.php" method=post>
            <h1>DODAJ OSOBY DO LISTY</h1>
            Podaj imię: <input name="imie" placeholder="Wpisz imię" type="text" required><br>
            Podaj nazwisko: <input name="nazwisko" placeholder="Wpisz nazwisko" type="text" required><br>
            Podaj rok urodzenia: <input name="data_urodzenia" placeholder="Wpisz rok urodzenia" type="number"><br>
            Podaj wzrost: <input name="wzrost_osoby" placeholder="Wpisz wzrost" type="number" required>
            <br>
            <input type="submit" value="Wyślij">
            <input type="reset" value="Wyczyść dane">
        </form>

        <?php             
        
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["imie"]) && isset($_POST["nazwisko"]) && !isset($_POST["wzrost_wyszukiwanie"])) {
                if (empty($_POST["imie"]) || empty($_POST["nazwisko"])) {
                    $imie = $_POST["imie"];
                    $nazwisko = $_POST["nazwisko"];
                    $data_urodzenia = $_POST["data_urodzenia"];
                    $wzrost = $_POST["wzrost_osoby"];
            
                    $base = mysqli_connect("localhost", "root", "", "osoby");
                    if (mysqli_connect_errno()) {
                        echo "UWAGA: " . mysqli_connect_error();
                        exit();
                    }
            
                    $z = "INSERT INTO osoby (imie, nazwisko, rok_urodzenia, wzrost) VALUES ('$imie', '$nazwisko', $data_urodzenia, $wzrost)";
                    $w = mysqli_query($base, $z);
                    mysqli_close($base);
            
                    if ($w) {
                        header("Location: ".$_SERVER['PHP_SELF']."?success=1");
                        exit();
                    } else {
                        echo "Błąd zapisu do bazy: " . mysqli_error($base);
                    }
                }
            }

        ?>

        <?php
        if (isset($_GET["success"])) {
            echo "<p style='color: green;'>✅ Dane zostały zapisane do bazy.</p>";
        }
        ?>

    </section>
    <section id="two">
        <form action="23. Zadanie 08.04.2025.php" method=post>
            <label for="input">Wyszukaj osoby: </label>
            <input type="number" name="wzrost_wyszukiwanie" placeholder="Wpisz wzrost"><br>
            <input type="submit" value="Wyślij">
            <input type="reset" value="Wyczyść dane">
        </form>

        <?php

            $base = mysqli_connect("localhost", "root", "", "osoby");
            if (mysqli_connect_errno()) {
                    echo "UWAGA błąd połączenia: ".mysqli_connect_error();
                    exit();
            }
            if (isset($_POST["wzrost_wyszukiwanie"])){
                $wzrost=$_POST["wzrost_wyszukiwanie"];
                $request = "SELECT imie, nazwisko, rok_urodzenia, wzrost FROM osoby WHERE wzrost = $wzrost";
                if ($r = mysqli_query($base, $request)) {
                    echo "Z bazy danych odczytano ".mysqli_num_rows($r)." rekordów.<br>";
                    while ($rekord = mysqli_fetch_assoc($r)) {
                        echo $rekord["imie"]." ".$rekord["nazwisko"].", ".$rekord["rok_urodzenia"].", wzrost: ".$rekord["wzrost"]." cm<br>";
                    }
                }
            }
            
        
        ?>

    </section>
    <section id="three">
        <?php
        
        $base = mysqli_connect("localhost", "root", "", "osoby");
        if (mysqli_connect_errno()) {
                echo "UWAGA błąd połączenia: ".mysqli_connect_error();
                exit();
        }
    
        $z = "select * from osoby";
        if ($w = mysqli_query($base, $z)) {
            echo "<br>Z bazy danych odczytano ".mysqli_num_rows($w)." rekordów<br>";
            echo "<table border = 2>";
            echo "<tr><th>IMIĘ</th><th>NAZWISKO</th><th>ROK URODZENIA</th></th><th>WZROST</th</tr>";
            while($rekord=mysqli_fetch_assoc($w)) { // mysqli_fetch_row($w) - tablica indeksowa
                echo "<tr><td>".$rekord["imie"]."</td><td>".$rekord["nazwisko"]."</td><td>".$rekord["rok_urodzenia"]."</td><td>".$rekord["wzrost"]."</td></tr>";
            }
            echo "</table>";
            mysqli_free_result($w);
        }
        mysqli_close($base);

        ?>
    </section>
</section>
    
</body>
</html>