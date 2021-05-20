<?php
$login = $_POST['login'];
if (strlen($login) > 0) {
  session_start();
  $_SESSION['login'] = $login;
}
header('Location: index.php');