<html>
<head>
    <title>Visualizzazione Dati Utente</title>
</head>
<body>

    <a href="index.html">Torna alla Home</a>

    <h1>Dati Inseriti</h1>
    <ul>
        <li><strong>Nome:</strong> <?= htmlspecialchars($_POST['nome']) ?></li>
        <li><strong>Cognome:</strong> <?= htmlspecialchars($_POST['cognome']) ?></li>
        <li><strong>Data di nascita:</strong> <?= htmlspecialchars($_POST['data_nascita']) ?></li>
        <li><strong>Codice fiscale:</strong> <?= htmlspecialchars($_POST['codice_fiscale']) ?: 'Non fornito' ?></li>
        <li><strong>Email:</strong> <?= htmlspecialchars($_POST['email']) ?></li>
        <li><strong>Cellulare:</strong> <?= htmlspecialchars($_POST['cellulare']) ?: 'Non fornito' ?></li>
        <li><strong>Indirizzo:</strong> <?= htmlspecialchars($_POST['via']) ?>, <?= htmlspecialchars($_POST['cap']) ?>, <?= htmlspecialchars($_POST['comune']) ?> (<?= htmlspecialchars($_POST['provincia']) ?>)</li>
        <li><strong>Nickname:</strong> <?= htmlspecialchars($_POST['nickname']) ?></li>
        <li><strong>Password:</strong> <?= htmlspecialchars($_POST['password']) ?></li>
    </ul>
    <a href="index.html">Torna alla pagina principale</a>
    <footer>
            <p>Nome Studente: Matteo Gildo Martienz</p>
            <p>Classe: 5A Informatica</p>
            <p>Email: martinez.m@galilux.edu.it</p>
        </footer>
</body>
</html>
