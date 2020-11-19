<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>todo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <div class="container">
                <h3 class="mt-5">todo list</h3>

                <div class="form-group mt-4">
                    <label for="todo">NEW todo</label>
                    <input type="text" class="form-control" id="todo">
                </div>

                <button type="submit" class="btn btn-primary">✔️</button>

                <table class="table mt-5">
                    <thead>
                        <th>ID</th><th>タスク</th><th>完了</th>
                    </thead>
                    <tbody>
                        <tr>
                            <tr v-for="todo in todos" v-bind:key="todo.id">
                                <td>@{{todo.id}}</td>
                                <td>@{{todo.title}}</td>
                                <td><button class="btn btn-secondary">完了</button></td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
