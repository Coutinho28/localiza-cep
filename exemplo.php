<?php
    require_once "vendor/autoload.php";

    use Lucas\localizacep\Search;
    
    $busca = new Search;

    $resultado = $busca->getAddressFromZipcode('06093070');
    print_r($resultado);
