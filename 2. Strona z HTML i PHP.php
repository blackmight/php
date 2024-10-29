<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Strona HTML i PHP</title>

    <style>

    *{
        padding: 10px;
        text-align: center;
    }

    main {
        width: 80%;
        margin-right: auto;
        margin-left: auto;
        background-color: grey;;
        border-radius: 15px;
    }

    header {
        background-color: #ffb703;
        min-height: 100px;
        color: #f1f1f1;
        border-radius: 10px;
    }

    nav {
        background-color: #8ecae6;
        min-height: 100px;
        width: calc(33.3333% - 20px);
        float: left;
        border-radius: 10px;
    }

    section {
        background-color: #219ebc;
        min-height: 100px;
        width: calc(33.3333% - 20px);
        float: left;
        border-radius: 10px;
    }

    aside {
        background-color: #023047;
        min-height: 100px;
        width: calc(33.3333% - 20px);
        float: left;
        color: #f1f1f1;
        border-radius: 10px;
    }

    footer {
        background-color: #fb8500;
        min-height: 100px;
        clear: both;
        border-radius: 10px;
    }

    </style>

</head>
<body>
 
    <main>
        <header>
            <h1>MOJA STRONA</h1>
        </header>

    <nav>
        <?php
            $a = rand(1, 100);
            echo $a;
        ?>
    </nav>
    
    <section>
        <?php
            $b = rand(1, 100);
            echo $b;
        ?>
    </section>

    <aside>
        <?php
            $c = rand(1, 100);
            echo $c;
        ?>
    </aside>

    <footer>
        <?php
            $suma = $a+$b+$c;
            echo "sqrt($a+$b+$c) = ".sqrt($suma)."<br>";
            echo "$a+$b+$c = $suma"
        ?>
    </footer>
    </main>
</body>
</html>