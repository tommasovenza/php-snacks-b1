<!-- Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano 
delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60  -->

<?php

$matches = [ 

    [
        'team in casa' => 'Milan',
        'team fuori casa' => 'Inter',
        'goal team in casa' => 3,
        'goal team fuori casa' => 1
    ],

    [
        'team in casa' => 'Juventus',
        'team fuori casa' => 'Sassuolo',
        'goal team in casa' => 1,
        'goal team fuori casa' => 2
    ],

    [
        'team in casa' => 'Napoli',
        'team fuori casa' => 'Roma',
        'goal team in casa' => 2,
        'goal team fuori casa' => 0
    ],

];

for ($i = 0; $i < count($matches); $i++) { 
    
    $stampa_corrente_team_in_casa = $matches[$i]['team in casa'];
    $stampa_corrente_team_fuori_casa = $matches[$i]['team fuori casa'];
    $stampa_corrente_goal_team_in_casa = $matches[$i]['goal team in casa'];
    $stampa_corrente_goal_team_fuori_casa = $matches[$i]['goal team fuori casa'];

    echo $stampa_corrente_team_in_casa . ' ' . $stampa_corrente_team_fuori_casa . ' ' . $stampa_corrente_goal_team_in_casa
     . '-' . $stampa_corrente_goal_team_fuori_casa . '<br>';

}



?>