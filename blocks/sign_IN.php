<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="row">
    <div class="col-4 mx-auto">
        <form method="post" action="function/sign_IN_scripts.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Логин</label>
                <input name="login" type="text" id="inputText" class="form-control" placeholder="Email" required=""
                       autofocus="">
                <small id="emailHelp" class="form-text text-muted">Мы никогда не передадим вашу электронную почту
                    кому-либо еще.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Пароль"
                       required="">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_login">Войти</button>
        </form>
    </div>

</div>


</body>
</html>