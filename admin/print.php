<?php
session_start();
require_once('connect.php');

$username = filter_var(trim('username'), FILTER_SANITIZE_STRING);
$password = 'password';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

print_r($_SESSION);

$check_user = $mysql->query("SELECT * FROM `admins` WHERE `username` = '$username' AND `password` = '$password'");
#if(mysqli_num_rows($check_user) > 0) {
    #$user = mysqli_fetch_assoc($check_user);
   /* $_SESSION['user'] = [
        "id" => 2,
        "firstname" => "Somsa",
        "username" => "Kartoshka",
        "email" => "laleli@la.leli",
        "usertype" => "admin"
    ];*/

    
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //$_SESSION = [];
    
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';


echo sha1('lola');
    #  header('Location: index.php');
#} #else {
    #$_SESSION['status'] = '<div class="alert alert-danger" role="alert">Не правильный логин или пароль!</div>';
 #   header('Location: login.php');
#}

#setcookie('user', $_SESSION['user']['username'], time() + 10);
#$mysql->close();
?>