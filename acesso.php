<?php

session_start();

$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];
     
    if($usuario == 'igor.lucas' && $senha == 'igorlucas123')
             {
                $_SESSION['usuario'] = $usuario;
                header('Location:restrito.php');
             }
    else
             {
                header('Location:index.html');

             }

     
?>