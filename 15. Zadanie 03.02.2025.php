<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 03.02.2025</title>

    <style>

        section{
            background-color: #f1f1f1;
        }

        tr, td {
            border: 3px solid;
        }

    </style>

</head>
<body>

    <section class="section-one">
        <?php
            $a = rand(1, 10);
            $b = rand(1, 10);

            while($a>$b){
                $b = rand(1,10);
            }

            echo "a = ".$a;
        ?>
    </section>
    <section class="section-two">
        <?php 
            echo "b = ".$b;
        ?>
    </section>
    <section class="section-three">
        <?php
            echo "<table>";
            for($i=$a;$i<$b;$i++){
                
                echo "<tr>X</tr>";
                echo "<td> x </td>";
                
            }
            echo "</table>";
        ?>
    </section>

    <?php
        // 3 sekcje, w 1 sekcje losuje sie liczbę a, w drugiej sekcji losuje 
        // się liczbę b, w sekcji 3 generujemy tabelkę dla funckji z=x^2 + y^2.
        //  X zmienia się w zakresie od a do b
    ?>
    
</body>
</html>