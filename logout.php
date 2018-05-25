<?php
setcookie('login', '$login', -100);
setcookie('password' , '$password', -100);
header('Location: /index.php' );


