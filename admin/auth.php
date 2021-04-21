<?php
session_start();
$mysql = new mysqli('localhost', 'root', '', 'adminpanel');

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
  
  $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
  $password = md5($_POST['password']);

  $check_user = $mysql->query("SELECT * FROM `admins` WHERE `username` = '$username' AND `password` = '$password'");
  if (mysqli_num_rows($check_user) > 0) {
      $user = mysqli_fetch_assoc($check_user);
      $_SESSION['user'] = [
          "id" => $user['id'],
          "username" => $user['username'],
          "name" => $user['name'],
          "email" => $user['email']
      ];
      header('Location: index.php');
    } else {
        $_SESSION['status'] = '<div class="alert alert-danger" role="alert">Не правильный логин или пароль!</div>';
        header('Location: login.php');
    }
$mysqli->close();
?>
