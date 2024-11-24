<html>
    <head>
    </head>
    <body>

    <a href="index.html">HOME QUADERNO</a>


        <h1>Schemi di triangoli</h1>

        <?php
        $rows = 10;

        // Triangolo (a)
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo '*';
            }
            echo '<br>';
        }
        echo '<br>';

        // Triangolo (b)
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $rows - $i + 1; $j++) {
                echo '*';
            }
            echo '<br>';
        }
        echo '<br>';

        // Triangolo (c)
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j < $i; $j++) {
                echo '&nbsp;';
            }
            for ($j = 1; $j <= $rows - $i + 1; $j++) {
                echo '*';
            }
            echo '<br>';
        }
        echo '<br>';

        // Triangolo (d)
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $rows - $i; $j++) {
                echo '&nbsp;';
            }
            for ($j = 1; $j <= $i; $j++) {
                echo '*';
            }
            echo '<br>';
        }
        ?>
        <footer>
            <p>Nome Studente: Matteo Gildo Martienz</p>
            <p>Classe: 5A Informatica</p>
            <p>Email: martinez.m@galilux.edu.it</p>
        </footer>
    </body>
</html>
