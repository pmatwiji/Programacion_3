<?php

    include "iMostrar.php";
    require_once __DIR__ . '/vendor/autoload.php';
    use NNV\RestCountries;

    class Continente implements iMostrar {

        public $continente;
        public $listaPaises;
        
        function __construct ($continente ="", $paises= null)
        {
            $restCountries = new RestCountries;
            $this->continente = $continente;
            if($paises==null)
            {
                $this->listaPaises = $restCountries->byRegion($continente);
            } else {
                $this->listaPaises = $paises;
            }

            
        }

        function Mostrar()
        {
            
            echo "Paises de " . $this->continente;

            return print (json_encode($this->listaPaises));
            
        }


    }

    
?>