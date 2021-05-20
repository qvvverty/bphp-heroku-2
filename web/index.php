<?php
session_start();
$login = $_SESSION['login'];
echo 'Привет, ' . ($login ?: 'гость') . '!' . PHP_EOL;

if (!isset($login)) {
  include 'form.html';
} else {
  echo '<br><a href="exit.php">Выход</a>';
}