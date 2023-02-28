<?php 


?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP ToDo List JSON</title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>

        <main>
            <div id="app">
                <div class="my-container">
                    <h1>To do list</h1>
                    <ul class="list-group">
                        <li v-for="(todo, index) in todolist" :key="todo.id" class="list-group-item">
                            {{ index + 1 }}. {{ todo.task }}
                        </li>
                    </ul>
                </div>
            </div>
        </main>


        <!-- VUE -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <!-- AXIOS -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!-- JS -->
        <script type="text/javascript" src="js/scripts.js"></script>

    </body>
</html>