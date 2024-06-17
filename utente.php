<?php
session_start();

$_SESSION["nome"] = $_POST["nome"];

//inizializziamo due variabili una con il punteggio del computer
// un'altra con il punteggio dell'utente
$_SESSION["puntUtente"] = 0;
$_SESSION["puntPc"] = 0;
// fa un redirect al file gioca.php
header("Location: http://localhost:8000/gioca.php");
exit();
?>
