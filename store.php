<?php 

// reupro il parametro dal $_post
$new_todo = $_POST['text'] ?? '';

// var_dump($new_todo);

// if($new_todo) {

// } else {

// }

// leggo il contenuto del file J Son
$todos_string = file_get_contents('./todos.json');
// decodifico il file J Son per ottenere un array di todos
$todos = json_decode($todos_string, true);

// var_dump($todos);

$todos[] = $new_todo;

// salvare il file:
// -codificare la stringa J Son dall' array di todos
$todo_string = json_encode($todos);
// -salvare il file con il nuovo contenuto
file_put_contents('./todos.json',$todo_string);

