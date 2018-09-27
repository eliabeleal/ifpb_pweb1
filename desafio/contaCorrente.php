<?php
    class ContaCorrente {
        private $numero;
        static $saldo;
        private $cliente;

        // include_once "cliente.php";
        // require e require_once

        function __construct(string $numero, Cliente $cliente, $saldo = 0.0)
        {
            $this->cliente = $cliente;
            $this->setnumero($numero);
        }

        function depositar (float $valor)
        {
            $this->setsaldo($this->getsaldo()+$valor);
        }

        function sacar (float $valor):bool
        {
            if ($this->getsaldo() > 0.0){
                $this->setsaldo($this->getsaldo()-$valor);
                return true;
            }
            else
            {
                return false;
            }
        }
        
        function getnumero ():string
        {
            return $this->numero;
        }
        
        function getsaldo ()
        {
            return self::$saldo;
        }

        function setnumero ($valor)
        {
            $this->numero = $valor;
        }

        function setsaldo ($valor)
        {
            self::$saldo = $valor;
        }
    }
?>