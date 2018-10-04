<?php
//https://www.devmedia.com.br/manipulando-datas-com-php/32966
    require_once('Produto.php');
    require_once('Perecivel.php');
    require_once('InformacaoNulaException.php');
    class Leite extends Produto implements Perecivel
    {
        private $marca;
        private $volume;
        private $dataValidade;

        function __construct($marca = NULL, $volume = NULL, $dataValidade = NULL, $codigo = NULL, $preco = NULL)
        {
            if ($marca == NULL) 
            {
                throw new InformacaoNulaException('o parametro marca está nulo');
            }
            if ($volume == NULL) 
            {
                throw new InformacaoNulaException('o parametro volume está nulo');
            }
            if ($dataValidade == NULL) 
            {
                throw new InformacaoNulaException('o parametro data de validade está nulo');
            }
            
            parent::__construct($codigo, $preco);

            $this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = new DateTime($dataValidade);
        }

        function estaVencido(): bool
        {
            $atual = new DateTime();
            if ($atual < $this->dataValidade)
                return False;
            else
                return True;
        }

    }
    
?>