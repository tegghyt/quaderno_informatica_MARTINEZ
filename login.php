<?php
$username = $_POST['nomeutente'];
$passwd = $_POST['password'];


if ($username == "Mario" && $passwd == "123") {
    $msg = "Benvenuto $username nella pagina riservata del sito!";
} else {
    $msg = "Attenzione: credenziali non corrette!";
}
?>

<html>
<head>
    <title>Accesso a pagina riservata</title>
</head>
<body>
    <h3>Pagina di login</h3>

    <!-- Mostra il messaggio di login -->
    <?=$msg?>

    <br>
    <!-- Link per tornare alla home -->
    <a href="index.html">Torna alla Home</a>
    <footer>
            <p>Nome Studente: Matteo Gildo Martienz</p>
            <p>Classe: 5A Informatica</p>
            <p>Email: martinez.m@galilux.edu.it</p>
        </footer>
</body>
</html>
