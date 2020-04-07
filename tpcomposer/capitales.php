<?php

    include "paises.php";
    use NNV\RestCountries;

    class Capital extends Continente {

        public $capital;
        
        public function __construct ($capital)
        {
            $restCountries = new RestCountries;
            parent::__construct("",$restCountries->byCapitalCity($capital));
            $this->capital = $capital;
        }

        function Mostrar()
        {
            echo "La capital seleccionada es  " . $this->capital;
            return print (json_encode($this->listaPaises));
        }
    }


?>