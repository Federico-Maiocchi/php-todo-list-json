<?php
// in questo file stampiamo il file J Son

// prendiamo i nostri file direttamente dal todos.json
// - metodo per prendere e leggere il contenuto del file
$todos_json = file_get_contents('./todos.json');

// json decodificato
$todos = json_decode($todos_json, true);



// traferiamo gli stessi dati che abbiamo nel client
// $todos = [
//     [
//     'text' => 'PHP',
//     'done' => false
//     ],
//     [
//     'text' => 'JavaScript',
//     'done' => false
//     ],
//     [
//     'text' => 'HTML',
//     'done' => true
//     ],
//     [
//     'text' => 'CSS',
//     'done' => true
//     ]
// ];


// impostazione del header
header('Content-Type: application/json');

// risposta
$response = [
    'success' => true,
    'results' => $todos,
];

// stampare i dati nel J Son
// - funzione per trasformare i nostri dati in file J Son
echo json_encode($response);