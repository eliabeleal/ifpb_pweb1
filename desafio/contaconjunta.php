<?php
    class ContaConjunta extends ContaCorrente {
        private $conjuge;
        function __construct (Cliente $cliente, $numero, $conjuge, $saldo = 0)
        {
            $this->conjuge = $conjuge;
            parent::__construct($cliente, $numero, $saldo);
        }
    }
?>