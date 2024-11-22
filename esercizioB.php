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

            // Stampiamo il risultato
            echo "<p>$saluto, $nome!</p>";
        ?>
    </body>
</html>
