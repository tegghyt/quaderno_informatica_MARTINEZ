<!DOCTYPE>
<head>
</head>
<body>
    <h1>Normalizzazione</h1>
    <p>
        La normalizzazione è un procedimento che, allo scopo di evitare le anomalie, porta a decomporre una tabella in più tabelle.
    </p>
    <h2>Forme Normali</h2>
    <h3>Prima Forma Normale (1NF)</h3>
    <p>
        Una tabella è in 1NF se ogni colonna contiene solo valori atomici (non divisibili) e ogni riga è univocamente identificabile.
    </p>
    <h3>Seconda Forma Normale (2NF)</h3>
    <p>
        Una tabella è in 2NF se è in 1NF e tutti gli attributi non chiave dipendono interamente dalla chiave primaria (nessuna dipendenza parziale).
    </p>
    <h3>Terza Forma Normale (3NF)</h3>
    <p>
        Una tabella è in 3NF se è in 2NF e nessun attributo non chiave dipende transitivamente da un'altra chiave primaria.
    </p>
    <h3>Forma Normale di Boyce-Codd (BCNF)</h3>
    <p>
        Una tabella è in BCNF se ogni determinante è una chiave candidata, ossia ogni dipendenza funzionale è basata su una chiave.
    </p>
    <h2>Esempio</h2>
    <h3>Tabella Non Normalizzata</h3>
    <?php
    echo '<table border="1">
        <tr>
            <th>Studente</th>
            <th>Corso</th>
            <th>Docente</th>
            <th>Aula</th>
        </tr>
        <tr>
            <td>Mario Rossi</td>
            <td>Matematica</td>
            <td>Prof. Bianchi</td>
            <td>Aula 101</td>
        </tr>
        <tr>
            <td>Mario Rossi</td>
            <td>Fisica</td>
            <td>Prof. Verdi</td>
            <td>Aula 102</td>
        </tr>
        <tr>
            <td>Luisa Verdi</td>
            <td>Matematica</td>
            <td>Prof. Bianchi</td>
            <td>Aula 101</td>
        </tr>
    </table>';
    ?>

    <h3>Tabella Normalizzata</h3>
    <p>Passo 1: Decomposizione in 1NF (valori atomici).</p>
    <p>Passo 2: Creazione di tabelle separate per le dipendenze.</p>

    <?php
    echo '<h4>Tabella Studenti</h4>
    <table border="1">
        <tr>
            <th>ID Studente</th>
            <th>Nome</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Mario Rossi</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Luisa Verdi</td>
        </tr>
    </table>';

    echo '<h4>Tabella Corsi</h4>
    <table border="1">
        <tr>
            <th>ID Corso</th>
            <th>Corso</th>
            <th>Docente</th>
            <th>Aula</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Matematica</td>
            <td>Prof. Bianchi</td>
            <td>Aula 101</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Fisica</td>
            <td>Prof. Verdi</td>
            <td>Aula 102</td>
        </tr>
    </table>';

    echo '<h4>Tabella Iscrizioni</h4>
    <table border="1">
        <tr>
            <th>ID Studente</th>
            <th>ID Corso</th>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
        </tr>
        <tr>
            <td>2</td>
            <td>1</td>
        </tr>
    </table>';
    ?>
</body>
</html>
