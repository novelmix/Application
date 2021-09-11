<title><?php echo $pageData['title']; ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
    <form>
        <a href="javascript:window.history.back();">Назад</a>
    </form>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="account" method="post">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input type="login" class="form-control" id="login" name="login">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>