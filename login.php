<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sola News | Авторизация </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="login-box">
    <h2>Авторизация</h2>
    <form action="check.php" method="POST">
        <div class="user-box">
            <input type="text" name="login" required>
            <label>Логин</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required>
            <label>Пароль</label>
        </div>
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="submit">Авторизация</button>
        </div>
    </form>
    </div>
    <div class="copyright">
        <p><strong>Powered by Usoft</strong></p>
    </div>
</body>
</html>