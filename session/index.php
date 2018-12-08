<html>
    <form action="autenticar.php" method="post">
    login:<br>
    <input type="text" name="login"><br>
    senha:<br>
    <input type="text" name="senha">
    <br><br>
    <input type="submit" value="entrar">
    </form>
    <?php
    if (isset($_GET['msg'])) {
        print_r($_GET['msg']);
    }
    ?>
</html>

