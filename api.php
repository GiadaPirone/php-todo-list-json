<?php

$lista= [
    ['stringa' => "Prenotare le vacanze 2023"],
   ['stringa' => "Comprare un nuovo costume"],
   ['stringa' => "Andare al mare il prima possibile!"],
];

header('Content-Type: application/json');
$stringaLista=  json_encode($lista);
echo$stringaLista;

?>