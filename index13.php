<?php
    // Exemplo de concatenação $rua = "Rua do Senai, 1000";
    $bairro = "Jd do aprendizado";
    $cidade = "Santo Andre"; =
    $cep = "03001-000";
    $enderecocompleto = "$rua ";
    $enderecocompleto .= "$bairro - ";
    $enderecocompleto .= "$cidade -";
    $enderecocompleto .= "$cep";
    print $enderecocompleto
?>