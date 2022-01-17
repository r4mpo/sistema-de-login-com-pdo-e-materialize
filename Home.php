<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: Index.php");
} /* Este trecho funciona para vericar a login através da session, permitindo apenas usuários logados a entrar. */
?>
<h4>Bem vindo ao sistema!</h4>
<a href="Lagout.php">Sair</a>