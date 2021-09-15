<div class="container">
    <nav class='navbar navbar-toggleable navbar-light bg-faded'>
        <a class="btn btn-primary" href="/main/create">Добавить</a>
    </nav>
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Задача</th>
                        <th>Email</th>
                        <th>Статус</th>
                        <th>
                            <?php if(checkAuth()) echo 'Действие'; ?>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data[0] as $column => $row) : ?>
                        <tr>
                            <td><?=$row['name']?></td>
                            <td><text><?=$row['text']?></text></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['status'] ? 'отредактировано администратором' : 'в процессе' ?></td>
                            <td>
                                <?php if(checkAuth()): ?>

                                    <a href='/main/edit/?id=<?=$row["id"]?>' class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>EDIT</a>
                                    <a href="/main/delete/?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>DELETE</a>

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

