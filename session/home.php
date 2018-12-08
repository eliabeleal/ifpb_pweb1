<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['login'])||($_SESSION['login']===false)) {
    header("location:index.php");
}
?>
<form action="listar.php" method="post">
    Nome:<br>
    <input type="text" name="nome">
    <input type="submit" value="add">
</form>
</body>
</html>