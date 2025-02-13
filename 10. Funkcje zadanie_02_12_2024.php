<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 02.12.2024</title>

    <style>

        .tabela {
            width: 100%;
            height: 150px;
            align-items: center;
            justify-content: center;
            justify-items: center;
            display: flex;
        }

        table {
            border: black solid 2px;
        }

        th {
            background-color: lightgrey;
            width: 20px;
            height: 30px;
            border: black solid 2px;
        }

        .bottom {
            width: 100%;
            height: 150px;
        }

    </style>

</head>
<body>

<?php

    function func($x)
    {
        return 2*pow($x,3)-pow($x,2)+3*$x-1;
    }

?>
<section class="tabela">
    <table>

        <tr>
            <th>x</th>
            <?php
                for($x=-10;$x<11;$x++){
                    echo "<th>".$x."</th>";
                }
            ?>
        </tr>
        <tr>
            <th>f(x)</th>
            <?php
                for($x=-10;$x<11;$x++){
                    echo "<th>".func($x)."</th>";
                }
            ?>
        </tr>

    </table>
</section>

<section class="bottom">

    <?php
        for($x=0;$x<11;$x++){
            echo "<section style:'background-color:green; height:'>"
        }
    ?>

</section>

</body>
</html>