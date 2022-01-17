<?php session_start();
session_unset();
session_destroy();
header("Location: Index.php");
/* Este script inicia a sessão do login, limpa-a e a destrói. Então o lagout funciona excluindo a session e redirecionando o user. */