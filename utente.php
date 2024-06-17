<?php
session_start();
$_SESSION["credito"] = $_POST["credito"];
$_SESSION["nome"] = $_POST["nome"];
$_SESSION["puntUtente"] = 0;
$_SESSION["puntPc"] = 0;
header("Location: http://localhost:8000/gioca.php");
exit();
?>
