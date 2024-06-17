<?php
session_start();
if (isset($_SESSION["nome"], $_SESSION["credito"])) {
    $nome = $_SESSION["nome"];
    $credito = $_SESSION["credito"];
} else {
    header("Location: http://localhost:8000/error.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gioca</title>
</head>
<body>
    <h1>Ciao <?php echo htmlspecialchars($nome); ?>, benvenuto nel gioco!</h1>
    
    <hr>
    <hr>
    <form action="random.php" method="post">
        Scegli testa o croce: 
        <select name="scelta">
            <option value="0">Testa</option>
            <option value="1">Croce</option>
        </select>
        <input type="submit" value="Gioca">
    </form>   
</body>
</html>
