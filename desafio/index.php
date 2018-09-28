<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include('cliente.php');
        include('contaCorrente.php');

        $nome = 'Eliabe';
        $cpf = '0757561234';

        $cliente = new Cliente($cpf, $nome);
        $conta = new ContaCorrente('1246', $cliente);
        $conta->depositar(435.65);
        $conta->sacar(10.00);
        //print_r($conta->getsaldo());
        print_r($conta);
    ?>
</body>
</html>