<?php
session_start();
unset($_SESSION['user']);
header('Location: /practice/admin2/login.php');
?>