<?php
// in questo file stampiamo il file J Son

// traferiamo gli stessi dati che abbiamo nel client
$todos = [
    [
    'text' => 'PHP',
    'done' => false
    ],
    [
    'text' => 'JavaScript',
    'done' => false
    ],
    [
    'text' => 'HTML',
    'done' => true
    ],
    [
    'text' => 'CSS',
    'done' => true
    ]
];


// impostazione del header
header('Content-Type: application/json');

// risposta
$response = [
    'success' => true,
    'results' => $todos,
];

// stampare i dati nel J Son
// -  funzione per trasformare i nostri dati in file J Son
echo json_encode($response);