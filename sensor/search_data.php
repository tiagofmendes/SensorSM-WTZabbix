<?php

    $filename = "http://ip_sensor/admin/cria_graficos";
    $content = file_get_contents($filename);
    $pattern = '/x_.*\|([0-9.]+)\|/';

    preg_match_all($pattern, $content, $match);

    $tempCh1 = floatval($match[1][0]);
    $umiCh1 = floatval($match[1][1]);
    $tempCh2 = floatval($match[1][2]);
    $umiCh2 = floatval($match[1][3]);

?>