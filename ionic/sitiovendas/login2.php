<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if($login=="admin"&&$senha=="admin")
{
$_SESSION['clogin'] = $login;
$_SESSION['csenha'] = $senha;
header('location:inicial.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:erro.php');

  }
?>