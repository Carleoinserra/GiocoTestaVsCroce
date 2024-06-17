<?php
session_start(); // Avvia la sessione

if (isset($_SESSION["nome"], $_SESSION["credito"])) {
    $nome = $_SESSION["nome"];
    $credito = $_SESSION["credito"];
   
} else {
    echo "Variabili di sessione non trovate.";
    exit(); // Interrompe l'esecuzione se le variabili di sessione non sono impostate
}
if (isset($_SESSION["puntUtente"], $_SESSION["puntPc"])) {
    $puntUt = $_SESSION["puntUtente"];
    $puntPc = $_SESSION["puntPc"];
    
   
} else {
    echo "Variabili di sessione non trovate.";
    exit(); // Interrompe l'esecuzione se le variabili di sessione non sono impostate
}


if (isset($_POST["scelta"])) {
    $sceltaNum = (int)$_POST["scelta"];
} else {
    echo "Scelta non trovata.";
    exit(); // Interrompe l'esecuzione se la scelta non è stata inviata
}
$gioca = true;
$min = 0;
$max = 1;
$randomNumber = random_int($min, $max);
if ($puntPc == 3){
    $gioca = false;
    echo "<h1> Hai perso.</h1>";
    $_SESSION["puntUtente"] = 0;
$_SESSION["puntPc"] =   0;
echo("<form action = 'randomTest.html' method = 'get'>");
echo("<input type = 'submit' value = 'rigioca'>");
echo("</form>");


}

if ($puntUt == 3) {
    $gioca = false;
    echo "<h1> Hai Vinto.</h1>";
    $_SESSION["puntUtente"] = 0;
$_SESSION["puntPc"] =   0;
echo("<form action = 'randomTest.html' method = 'get'>");
echo("<input type = 'submit' value = 'rigioca'>");
echo("</form>");

}
if ($gioca == true) {
if ($randomNumber == 1) {
    echo "è uscito croce<br>";
} else {
    echo "è uscito testa<br>";
}

if ($randomNumber != $sceltaNum) {
    echo "$nome, hai perso<br>";
    $credito -= 2;
    $puntPc += 1;
    echo("Computer punti: " . $puntPc);
    echo("Tu hai punti: " . $puntUt);
} else {
    echo "$nome, hai vinto<br>";
    $credito += 2;
    $puntUt += 1;
    echo("Computer punti: " . $puntPc);
    echo("Tu hai punti: " . $puntUt);
}



// Aggiorna il punteggio dell'utente e il punteggio del pc
$_SESSION["puntUtente"] = $puntUt;
$_SESSION["puntPc"] = $puntPc;

}
exit();
?>
