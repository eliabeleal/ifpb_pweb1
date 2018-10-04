<?php
    class Produto 
    {
        private $codigo;
        private $preco;

        function __construct($codigo, $preco)
        {
            if ($codigo == NULL)
            {
                throw new InformacaoNulaException('o parametro codigo está nulo');
            }
            if ($preco == NULL) 
            {   
                throw new InformacaoNulaException('o parametro preço está nulo');
            }
            $this->codigo = $codigo;
            $this->preco = $preco;
        }
    }
?>