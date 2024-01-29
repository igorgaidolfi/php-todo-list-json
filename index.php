<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <title>Php TodoList</title>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">Todolist</h1>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="todo" class="form-label">Inserisci un To-Do</label>
                        <div class="input-group">
                            <input type="text" class="form-control" v-model="toDo" placeholder="Todo" @keyup.enter="addTodo">
                            <button class="btn btn-primary" @click="addTodo">Invia</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="list-unstyled">
                            <li v-for="todo,key in todoList" :key="key">{{todo.text}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="./js/script.js"></script> 
    </body>
</html>