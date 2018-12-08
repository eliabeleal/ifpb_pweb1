<?php
session_start();
if (!isset($_SESSION['login'])||($_SESSION['login']===false)) {
    header("location:index.php");
}

echo '<form action="sair.php" method="post">
    <input type="submit" value="sair">
</form>
<form action="home.php" method="post">
    <input type="submit" value="voltar">
</form>'
?>
