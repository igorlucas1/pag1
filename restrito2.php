<?php
session_start();

$usuario = $_SESSION['usuario'];

if($usuario == "igor.lucas")
{
  echo "Olá Denovo $usuario";
  echo "<br>";
  echo "<a href= 'restrito.php'>Restrito<a/><br>"; 
  echo "<a href= 'encerrar.php'>Sair<a/>";
}
else
{
    header('Location:index.html');
}



?>