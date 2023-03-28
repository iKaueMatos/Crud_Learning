<?php

function format_date($data){
    return implode('/',array_reverse(explode('-', $data)));
}

function format_telephone($telephone){
    //Essa função substr e responsavel por declarar como o nosso numero ou letra vai ser dividico permitindo declarar na onde
    //ele começa e na onde ele termina
    $ddd = substr( $telephone,0,2);
    $part1 = substr( $telephone,2,5);
    $part2 = substr( $telephone,7);
    //exibindo o telefone no formato BR
    return "($ddd) $part1-$part2";

}


?>