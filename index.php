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
                </div>
                
            </section>
            <section>
                <div class="container">
                    <h3> {{ message }} </h3>
                    <ul>
                        <li v-for="(todo, i) in todos " :key="i" >{{ todo }}</li>
                       
                    </ul>
                </div>
            </section>
        </main>

    
    </div>

    <script src="./js/main.js"></script>
</body>
</html>