<?php
$login = filter_var(trim($_POST['login']), 
FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']), 
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 32) {
    echo 'Недопустимая длина логина';
    exit();
 } elseif(mb_strlen($pasword) < 6 || mb_strlen($password) > 32) {
    echo 'Недопустимая длина пароля';
    exit();
 }

 $mysql = new mysqli('localhost', 'root', '', 'solanews');
 $mysql->query('')
 

?>