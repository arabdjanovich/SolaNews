<?php
session_start(); 
if (!$_SESSION['user'] == 1) {
  header('Location: login.php');
} 
?>