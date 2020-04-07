<?php

    include "continentes.php";
    use NNV\RestCountries;

    class Pais extends Continente {

        public $pais;
        
        public function __construct ($pais = "", $paises = [])
        {
            $restCountries = new RestCountries;
            parent::__construct("",$restCountries->byName($pais));
            
            $this->pais = $pais;
        }

        function Mostrar()
        {
            echo "El pais seleccionado es " . $this->pais;

            return print (json_encode($this->listaPaises));
        }
    }


?>