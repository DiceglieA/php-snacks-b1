<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$numeri = [];

for ($i=0; $i < 15; $i++) { 
    $numran = rand(1, 50);
    
    $numeri[] = $numran;
    
}
var_dump($numeri)
?>