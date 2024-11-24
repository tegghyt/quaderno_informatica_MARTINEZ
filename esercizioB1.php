<html>
    <head>
    </head>
    <body>
        <a href="index.html">HOME QUADERNO</a>


        <h1>Ti Saluto</h1>

        <?php

            $nome = "Paolo";

            $ora = date("H");
            if ($ora >= 8 && $ora < 12) {
                $saluto = "Buongiorno";
            } elseif ($ora >= 12 && $ora < 20) {
                $saluto = "Buonasera";
            } else {
                $saluto = "Buonanotte";
            }

            echo "<p>$saluto, $nome!</p>";
        ?>
        <footer>
            <p>Nome Studente: Matteo Gildo Martienz</p>
            <p>Classe: 5A Informatica</p>
            <p>Email: martinez.m@galilux.edu.it</p>
        </footer>
    </body>
    
</html>