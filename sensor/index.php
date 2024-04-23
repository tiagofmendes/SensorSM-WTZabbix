<?php 

    require_once('search_data.php');

    $requisicao = $_GET['id'];

    switch($requisicao) {

        case 1:
            echo $tempCh1;
        break;

        case 2:
            echo $umiCh1;
        break;

        case 3:
            echo $tempCh2;
        break;

        case 4:
            echo $umiCh2;
        break;

    }

?>
 