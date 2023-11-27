<?php 

// reupro il parametro dal $_post
$new_todo_text = $_POST['text'] ?? '';

$new_todo = [
    'text' => $new_todo_text,
    'done' => false,
];
// var_dump($new_todo);

$response = [
    'success' => true,
];

if ($new_todo_text) {
    // leggo il contenuto del file J Son
    $todos_string = file_get_contents('./todos.json');
    // decodifico il file J Son per ottenere un array di todos
    $todos = json_decode($todos_string, true);


    // pushare l'elemento 
    $todos[] = $new_todo;

    // var_dump($todos);

    $response['todos'] = $todos;

    // salvare il file:
    // -codificare la stringa J Son dall' array di todos
    $todo_string = json_encode($todos);
    // -salvare il file con il nuovo contenuto
    file_put_contents('./todos.json',$todo_string);
} else {

    $response['success'] = false;
    $response['message'] = 'todo non inserita';
}

// dare una risposta in formato json
header('Content-Type: application/json');

echo json_encode($response);





