<?php

$title = 'To do lists'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP todo list json</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div id="app">
        <main>
            <section>
                <div class="container">
                    <h1> <?php echo $title ?> </h1>
                    <!-- collegamento bidirezionale, aggiungere un nuovo oggetto nell'array -->
                    <input type="text" v-model="newTodo" @keyup.enter="storeTodo">
                    <input type="submit" value="aggiungi" @click="storeTodo">
                </div>    
            </section>
            <section>
                <div class="container">
                    <h3> {{ message }} </h3>
                    <ul>
                        <li :class="{ done: todo.done }"
                            v-for="(todo, i) in todos " 
                            :key="i" >
                            <span @click="checkTodo(i)">{{ todo.text }}</span>
                            <span @click="deleteTodo(i)">Delete</span>
                        </li>   
                    </ul>
                </div>
            </section>
        </main>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>