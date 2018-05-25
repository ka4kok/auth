<?php
if ( !empty($_POST) ) {
    require 'auth.php';

    $login = $_POST['login'] ? $_POST['login'] : '';
    $password = $_POST['password'] ? $_POST['password'] : '';

    if (checkAuth($login, $password)) {
        setcookie('login', $login);
        setcookie('password', $password);
        header('Location: /index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>

<html>
<head>

</head>

<body>


<div class="box" style="display: flex; justify-content: center">
    <div class="auth">
        <?php if ( isset($error) ) {?>
            <span class="error" style="color: red">
                <?= $error ?>
            </span>
        <?php }?>

        <form action="/login.php" method="post">
            Имя пользавателя: <input type="text" name="login"> <br>
            Пароль: <input type="text" name="password"> <br>
            <input type="submit" value="Войти">
        </form>
    </div>
</div>

</body>
</html>