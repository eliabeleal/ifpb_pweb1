<?php
//https://www.devmedia.com.br/manipulando-datas-com-php/32966
    class Leite extends Produto implements Perecivel
    {
        private $marca;
        private $volume;
        private $dataValidade;

        function __construct($marca, $volume, $dataValidade, $codigo, $preco)
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
            
            parent::__construct($marca, $codigo, $preco);

            //$this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = new DateTime($dataValidade);

            $this->log('Sua classe ('.__CLASS__.') foi criada<br>');
        }

        function estaVencido(): bool
        {
            $atual = new DateTime();
            if ($atual < $this->dataValidade)
                return False;
            else
                return True;
        }

        public function getVolume()
        {
                return $this->volume;
        }
        public function setVolume($volume)
        {
                $this->volume = $volume;
                return $this;
        }
    }
    
?>