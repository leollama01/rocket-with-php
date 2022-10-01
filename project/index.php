<?php

    $pagina = file_get_contents("./html/index.html");

    echo $pagina;

    $distanciaTotal = 384.400;

    if (isset($_REQUEST['quantidade-combustivel']) && isset($_REQUEST['quantidade-consumida'])) {
        $quantidadeCombustivel = $_REQUEST['quantidade-combustivel'];
        $quantidadeConsumida = $_REQUEST['quantidade-consumida'];
        if ($quantidadeCombustivel != '' && $quantidadeConsumida != '') {
            $quantidadeCombustivelInicial = $quantidadeCombustivel;
            $quantidadeConsumidaInicial = $quantidadeConsumida;
            $quantidadeArray = [];

            while ($distanciaTotal > 0 && $quantidadeCombustivel > 0) {
                $distanciaTotal -= 15.376;
                $quantidadeCombustivel -= $quantidadeConsumida;
                $quantidadeArray[] = $quantidadeCombustivel;
            }
        
            // echo($quantidadeArray);
            // print_r($quantidadeArray);

            echo('<br>');
            echo('<div class="text-center">');
            echo('<p>Quantidade de combustível: <b>' . $quantidadeCombustivelInicial . '</b></p>');
            echo('<p>Quantidade consumida a cada 15.376 Km:  <b>' . $quantidadeConsumidaInicial . '</b></p>');
            echo('<hr>');
            echo('<br>');

            for ($i = 0; $i < count($quantidadeArray); $i++) {
                if ($quantidadeArray[$i] > 0) {
                    echo('Quantidade de combustível restante no tanque: <b>' . $quantidadeArray[$i] . '</b><br>');
                }
            }

            if (count($quantidadeArray) < 25) {
                echo('<br><p><b>O foguete não alcançou seu objetivo! Não chegou a lua por falta de combustível.</b></p>');
            } else {
                echo('<br><p><b>O foguete chegou a lua!</b></p>');
            }
            echo('</div>');
        } else {
            echo('<br><div class="text-center">Por favor, preencha os dois campos!</div>');
        }

    }

?>