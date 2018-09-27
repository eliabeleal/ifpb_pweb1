<?php
    class Cliente {
        private $cpf;
        private $nome;

        function __construct($cpf, $nome)
        {
            $this->setcpf($cpf);
            $this->setnome($nome);
        }
      
        function getnome ():string
        {
            return $this->nome;
        }
        
        function getcpf ():string
        {
            return $this->cpf;
        }

        function setnome (string $dado)
        {
            $this->nome = $dado;
        }

        function setcpf (string $dado)
        {
            $this->cpf = $dado;
        }
    }
?>