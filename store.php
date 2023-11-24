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


// leggo il contenuto del file J Son
$todos_string = file_get_contents('./todos.json');
// decodifico il file J Son per ottenere un array di todos
$todos = json_decode($todos_string, true);

// var_dump($todos);

// pushare l'elemento 
$todos[] = $new_todo;

$response['todos'] = $todos;

// salvare il file:
// -codificare la stringa J Son dall' array di todos
$todo_string = json_encode($todos);
// -salvare il file con il nuovo contenuto
file_put_contents('./todos.json',$todo_string);

header('Content-Type: application/json');

echo json_encode($response);





