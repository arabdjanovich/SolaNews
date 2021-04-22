<?php
include_once 'includes/access.php';

require_once 'connect.php';

$connection = mysqli_connect('localhost','root','','admin');

if(isset($_POST['updatebtn'])){
    $id = $_POST['edit_id'];
    $firstname = $_POST['edit_firstname'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = md5($_POST['edit_password']);
    $usertype = $_POST['edit_usertype'];

    $query = "UPDATE `admins` SET `id` = '$id', `firstname` = '$firstname', `username` = '$username', `password` = '$password', `email` = '$email', `usertype` = '$usertype' WHERE `admins`.`id` = '$id'";
    $query_run = mysqli_query($connection, $query);
    $connection->close();

    $_SESSION['user']['usertype'] = $usertype;
    header('Location: register.php');
    
    $_SESSION['status'] = '<div class="alert alert-success" role="alert"><center><h3>Данные изменены!</h3></center></div>';
    exit;
}

if(isset($_POST['deletebtn'])){
    $id = $_POST['delete_id'];
    
    $query = "DELETE FROM `admins` WHERE `admins`.`id` = '$id'";
    $query_run = mysqli_query($connection, $query);
    $connection->close();

    if($_SESSION['user']['id'] == $id) {
        session_unset();
        header('Location: login.php');
        exit;
    }
    
    header('Location: register.php');
    $_SESSION['status'] = '<div class="alert alert-danger" role="alert"><center><h3>Администратор удален!</h3></center></div>';
    exit;
}
?>