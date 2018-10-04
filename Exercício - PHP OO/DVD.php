<?php
    require_once('Produto.php');
    class DVD extends Produto 
    {
        private $titulo;
        private $ano;

        function __construct($titulo = NULL, $ano = NULL, $codigo = NULL, $preco = NULL)
        {
            if ($titulo == NULL) 
            {   
                throw new InformacaoNulaException('o parametro titulo esta nulo');
            }
            if ($ano == NULL) 
            {
                throw new InformacaoNulaException('o parametro ano esta nulo');
            }

            //$this->titulo = $titulo;
            $this->ano = new DateTime($ano);
            parent::__construct($titulo, $codigo, $preco);

            $this->log('Sua classe ('.__CLASS__.') foi criada<br>');
        }
    }
    

?>