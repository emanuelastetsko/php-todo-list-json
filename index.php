<?php 


?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP ToDo List JSON</title>
    </head>
    <body>

        <main>
            <div id="app">
                <ul>
                    <li v-for="(todo, index) in todolist" :key="todo.id">
                        {{ index + 1 }}. {{ todo.task }}
                    </li>
                </ul>
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