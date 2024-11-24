<html>
<head>
    <title>Anagrafica Utenti</title>
</head>
<body>

    <a href="index.html">Torna alla Home</a>

    <h1>Gestione Anagrafica Utenti</h1>
    <form action="visualizza.php" method="post">
        <!-- Nome -->
        <label for="nome">Nome (obbligatorio):</label>
        <input type="text" id="nome" name="nome" required pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s]+" title="Solo lettere e spazi" />
        <br><br>

        <!-- Cognome -->
        <label for="cognome">Cognome (obbligatorio):</label>
        <input type="text" id="cognome" name="cognome" required pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s']+" title="Solo lettere, spazi e apostrofi" />
        <br><br>

        <!-- Data di nascita -->
        <label for="data_nascita">Data di nascita (obbligatoria):</label>
        <input type="date" id="data_nascita" name="data_nascita" required />
        <br><br>

        <!-- Codice fiscale -->
        <label for="codice_fiscale">Codice fiscale (opzionale):</label>
        <input type="text" id="codice_fiscale" name="codice_fiscale" maxlength="16" />
        <br><br>

        <!-- Email -->
        <label for="email">Email (obbligatoria):</label>
        <input type="email" id="email" name="email" required />
        <br><br>

        <!-- Cellulare -->
        <label for="cellulare">Cellulare (opzionale, 12 cifre):</label>
        <input type="tel" id="cellulare" name="cellulare" pattern="[0-9]{12}" title="Inserisci un numero di 12 cifre" />
        <br><br>

        <!-- Indirizzo -->
        <fieldset>
            <legend>Indirizzo (obbligatorio)</legend>
            <label for="via">Via/Piazza:</label>
            <input type="text" id="via" name="via" required />
            <br><br>
            <label for="cap">CAP:</label>
            <input type="text" id="cap" name="cap" required pattern="[0-9]{5}" title="Inserisci un CAP valido (5 cifre)" />
            <br><br>
            <label for="comune">Comune:</label>
            <input type="text" id="comune" name="comune" required />
            <br><br>
            <label for="provincia">Provincia:</label>
            <input type="text" id="provincia" name="provincia" required maxlength="2" pattern="[A-Za-z]{2}" title="Inserisci la sigla della provincia (2 lettere)" />
        </fieldset>
        <br>

        <!-- Nickname -->
        <label for="nickname">Nickname (diverso da nome e cognome):</label>
        <input type="text" id="nickname" name="nickname" required />
        <br><br>

        <!-- Password -->
        <label for="password">Password (min. 8 caratteri, una maiuscola, un numero, un carattere speciale):</label>
        <input type="password" id="password" name="password" required pattern="(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{8,}" title="Deve contenere almeno 8 caratteri, una maiuscola, un numero e un carattere speciale" />
        <br><br>

        <!-- Pulsante invio -->
        <button type="submit">Invia</button>
    </form>
    <footer>
            <p>Nome Studente: Matteo Gildo Martienz</p>
            <p>Classe: 5A Informatica</p>
            <p>Email: martinez.m@galilux.edu.it</p>
        </footer>
</body>
</html>
