<?php
session_start(); 
if (!$_SESSION['user']['usertype'] == 'Administrator' || !$_SESSION['user']['usertype'] == 'Moderator') {
  header('Location: login.php');
} 
?>