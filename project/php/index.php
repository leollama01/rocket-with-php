<?php

    $pagina = file_get_contents("../html/index.html");

    $distanciaTotal = 384.400;

    if (isset($_REQUEST['quantidade-combustivel']) && isset($_REQUEST['quantidade-consumida'])) {
        $quantidadeCombustivel = $_REQUEST['quantidade-combustivel'];
        $quantidadeConsumida = $_REQUEST['quantidade-consumida'];
        $quantidadeArray = [];

        echo($quantidadeCombustivel) . '<br>';
        echo($quantidadeConsumida);

        while ($distanciaTotal > 0 && $quantidadeCombustivel > 0) {
            $distanciaTotal -= 15.376;
            $quantidadeCombustivel -= $quantidadeConsumida;
            $quantidadeArray[] = $quantidadeCombustivel;
        }
    
        // echo($quantidadeArray);
        print_r($quantidadeArray);
    }

    


    echo $pagina;

    

?>