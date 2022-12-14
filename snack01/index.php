<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$partite = [

        [
            'home' => 'Bologna',
            'away' => 'Cantu',
            'ptHome' => 55,
            'ptAway' => 118
        ],
        [
            'home' => 'Treviso',
            'away' => 'Roma',
            'ptHome' => 66,
            'ptAway' => 80
        ],
        [
            'home' => 'Ravenna',
            'away' => 'Ambrosiana',
            'ptHome' => 102,
            'ptAway' => 90
        ],
        [
            'home' => 'Sassari',
            'away' => 'Modena',
            'ptHome' => 55,
            'ptAway' => 62
        ],

    ];

for ($i = 0; $i < count($partite); $i++) { 
    echo $partite[$i]['home'] . ' - ' . $partite[$i]['away'] . ' / ' . $partite[$i]['ptHome'] . ' - ' . $partite[$i]['ptAway'];
    echo '<br>';
}


?>