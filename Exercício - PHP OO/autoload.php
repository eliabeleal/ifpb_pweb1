<?php
    spl_autoload_register(
        function ($classe)
        {
            echo 'Interpretador1 está a procura da classe: '.$classe.'<br>';
            $filename = "$classe.php";
            if (file_exists($filename))
                include_once $filename;

        }
    );
    spl_autoload_register(
        function ($classe)
        {
            echo 'Interpretador2 está a procura da classe: '.$classe.'<br>';
            $filename = "Model/$classe.php";
            if (file_exists($filename))
                include_once $filename;

        }
    );
    spl_autoload_register(
        function ($classe)
        {
            echo 'Interpretador3 está a procura da classe: '.$classe.'<br>';
            $filename = "Model/Laticinio/$classe.php";
            if (file_exists($filename))
                include_once $filename;

        }
    );
    spl_autoload_register(
        function ($classe)
        {
            echo 'Interpretador2 está a procura da classe: '.$classe.'<br>';
            $filename = "Model/Midia/$classe.php";
            if (file_exists($filename))
                include_once $filename;

        }
    );
    spl_autoload_register(
        function ($classe)
        {
            echo 'Interpretador2 está a procura da classe: '.$classe.'<br>';
            $filename = "Traits/$classe.php";
            if (file_exists($filename))
                include_once $filename;

        }
    );
?>