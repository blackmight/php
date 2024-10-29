<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdzian 04.10.2024</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>

        * {
            background-color: #f1f1f1;
            color: #f1f1f1;
            font-family: "Montserrat", extra-bold;
            font-weight: 700;
        }

        .left {

            background-color: #053363;
            width: 50%;
            height: 300px;
            float: left;
            text-align: center;
            justify-content: center;
            display: flex;
            align-items: center;

            }

            .right {

            background-color: #175b91;
            width: 50%;
            height: 300px;
            float: left;
            text-align: center;
            justify-content: center;
            display: flex;
            align-items: center;

            }


    </style>

</head>
<body>

        <section class="left">

            <?php
            
                if(empty($_GET['x'])) {
                    echo "Brak wartości x";
                    exit();
                }

                $x = $_GET['x'];
                echo "Wartość x: ".$x

            ?>

        </section>

        <section class="right">
            
        
                <?php
                
                    for($i=0;$i<10;$i++){
                        $random_number = rand(1, 10);

                        if ($random_number==$x){

                            echo "<br><span style='color: red; background-color: #175b91'>".$random_number."</span>";
                        } 
                        else {
                            echo $random_number."<br>";
                        }

                        }

                ?>

        </section>
    
</body>
</html>