<?php

session_start();

unset($_SESSION['nome']);
$pdo = null;

header ('Location: ../login.php')


?>