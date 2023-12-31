<?php
// recupero il parametro dal post in questo caso l'index
$index = $_POST['id'] ?? '';

// $index_int = intval($index);
// var_dump($index_int);

$response = [
    'success' => true,
];

// controllo che selezionando il primo elemento della lista (indice 0) non ti cancella tutta la lista
// siccome php vedo lo zero = false
if ($index || $index === '0') {
    // leggiamo il file j son
    $todos_string = file_get_contents('./todos.json');
    // decodifico il file J Son per ottenere un array di todos
    $todos = json_decode($todos_string, true);

    // togliere l'elemnto in base all' index selezionato
    array_splice($todos, $index, 1);

    $response ['todos'] = $todos;

    // salvare il file:
    // -codificare la stringa J Son dall' array di todos
    $todo_string = json_encode($todos);
    // -salvare il file con il nuovo contenuto
    file_put_contents('./todos.json',$todo_string);

} else {
    $response['success'] = false;
}

header('Content-Type: application/json');

echo json_encode($response);