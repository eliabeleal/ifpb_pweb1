<?php
require_once('Leite.php');
require_once('DVD.php');
$estoque = [
    1 => new Leite('Parmalate', '18ml', '10-08-2017', '001', 10.0),
    2 => new Leite('Nestle', '100ml', '15-05-2018', '002', 19.0),
    3 => new Leite('Balduco', '20ml', '09-08-2016', '003', 18.1),
    4 => new Leite('Lacta', '15ml', '08-08-2000', '004', 20.0),
    5 => new Leite('Moça', '16ml', '14-01-2013', '005', 99.0),
    6 => new Leite('De vaca', '19ml', '08-12-1987', '006', 50.0),
    7 => new DVD('Capitão América', '2013', '007', 11.5),
    8 => new DVD('Vingadores','2016 ', '008', 2.5),
    9 => new DVD('Interestelar','2015', '009', 1.5),
    10 => new DVD('Homem Aranha', '2018', '010', 20.5),
];

if (get_class($estoque))
$estoque
?>