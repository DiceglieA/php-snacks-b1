<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$numeri = [];

while (count($numeri) < 15) { 
    $numran = rand(1, 20);
    if (!in_array($numran, $numeri)) {
        $numeri[] = $numran;
    };    
}
var_dump($numeri)
?>