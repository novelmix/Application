<!DOCTYPE html>
<html lang=ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title><?php echo $pageData['title']; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                <?php echo $pageData['logo']; ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="/">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <?php if(checkAuth()): ?>
                            <a class="nav-link" href="/login/logout">Выход</a>
                        <?php else: ?>
                            <a class="nav-link" href="/login">Авторизация</a>
                        <?php endif; ?>
                    <li>
                </ul>
            </div>
        </div>
    </nav>

<!--    <main class="py-4">-->
<!--        --><?php //include 'application/views/'.$content_view; ?>
<!--    </main>-->
    <div class="container">
        <nav class='navbar navbar-toggleable navbar-light bg-faded'>
            <a class="btn btn-primary" href="/todo/create">Добавить</a>
        </nav>
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>имя</th>
                        <th>задача</th>
                        <th>email</th>
                        <th>статус</th>
                        <th>
                            <?php if(checkAuth()) echo 'ред.'; ?>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data[0] as $column => $row) : ?>
                        <tr>
                            <td><?=$row['name']?></td>
                            <td><textarea><?=$row['text']?></textarea></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['status'] ? 'отредактировано администратором' : ''?></td>
                            <td>
                                <?php if(checkAuth()): ?>
                                    <a href='/todo/edit/?id=<?=$row["id"]?>' >edit</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <?php if($data[1]) : ?>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <?=$data[1];?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
</body>
</html>