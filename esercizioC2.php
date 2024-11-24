<html>
<head>
    <title>Tabella Quadrati e Cubi</title>
</head>
<body>

    <a href="index.html">Torna alla Home</a>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recupera il numero N dal form
        $n = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

        // Controllo validità del numero
        if ($n >= 1 && $n <= 10) {
            // Generazione della tabella
            echo "<h3>Tabella dei quadrati e dei cubi da 1 a $n</h3>";
            echo "<table border='1' cellpadding='5'>";
            echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";
            for ($i = 1; $i <= $n; $i++) {
                $quadrato = $i * $i;
                $cubo = $i * $i * $i;
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$quadrato</td>";
                echo "<td>$cubo</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Messaggio di errore
            echo "<p>Errore: Il numero deve essere compreso tra 1 e 10.</p>";
        }
    } else {
        // Visualizza il form se il metodo non è POST
    ?>
        <h3>Seleziona un numero da 1 a 10</h3>
        <form action="" method="post">
            <label for="numero">Numero:</label>
            <select name="numero" id="numero" required>
                <option value="" disabled selected>-- Seleziona --</option>
                <?php
                // Generazione del menu a tendina
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <br><br>
            <button type="submit">Crea tabella</button>
        </form>
    <?php
    }
    ?>
    <footer>
            <p>Nome Studente: Matteo Gildo Martienz</p>
            <p>Classe: 5A Informatica</p>
            <p>Email: martinez.m@galilux.edu.it</p>
        </footer>
</body>
</html>
