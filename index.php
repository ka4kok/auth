<?php

require 'auth.php';
$login = getUserLogin();

?>

<html>
<head>

</head>

<body>

<div class="box" style="display: flex; justify-content: center">
    <div class="auth">
        <?php if ( $login === null ) { ?>
            <a href="login.php">Авторизуйтесь</a>
        <?php } else { ?>
            Добро пожаловать, <?= $login ?>
            <br>
            <a href="logout.php">Выйти</a>
        <?php } ?>
    </div>
</div>


</body>
</html>