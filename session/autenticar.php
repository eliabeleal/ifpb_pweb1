<?php
if ($_POST['login'] == 'Eli' && $_POST['senha'] == 12) 
{
    session_start();
    $_SESSION['login'] = true;
    header("location: home.php");
}
else 
{
    header("location: index.php?msg=falha ao autenticar");
}
?>
