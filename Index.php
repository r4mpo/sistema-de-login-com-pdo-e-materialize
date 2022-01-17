<?php 
session_start(); // Iniciando a sessão (session) do LOGIN
require_once 'conexao.php'; // Requerindo a conexão com o banco de dados
require_once 'Usuario.Class.php'; // Requerindo o script para usarmos a classe
$u = new Usuario(); // Definindo um novo objeto da classe Usuario
if(isset($_POST['btn-entrar'])){ /* Essa condicional a seguir, indica que, quando o botão for clicado, os seguintes parâmetros serão executados */
    if(!empty($_POST['user']) && !empty($_POST['password'])){ /* Verifica-se se os campos forão devidamente preenchidos. */
    $user = addslashes($_POST['user']); // addslashes evita códigos maliciosos nos inputs
    $password = addslashes($_POST['password']); // addslashes evita códigos maliciosos nos inputs
    $u->login($user, $password); /* Os dados do formulário são enviados à função login, na classe Usuario. */
    }else {
        echo "<script>alert('Todos os campos devem ser preenchidos!')</script>"; /* Mensagem caso algum campo não tenha sido preenchido. */
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Index</title>
    <!-- Os links a seguir são anexados para que o sistema siga o framework Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
    <div class="row" style="margin-top:10%;width:500px;margin-left:30%;">
        <form class="col s12" action="" method="post">
            <div class="row">
                <div class="input-field col s6">
                <i class="material-icons prefix">person</i>
                <input type="text" name="user" id="user" class="validate">
                <label for="user">Usuário</label>
                </div>
                <div class="input-field col s6">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password" class="validate">
                <label for="password">Senha</label>
                </div>
            </div>
            <button type="submit" class="waves-effect green btn" name="btn-entrar" id="btn-entrar"><i class="material-icons right">keyboard_return</i>Entrar</a>
        </form>
    </div>
    <table class="striped" style="margin-top:5%;width:400px;margin-left:35%;">
    <tr>
        <td>Usuário</td>
        <td>Senha</td>
    </tr>
    <tr>
        <td>r4mpo</td>
        <td>123</td>
    </tr>
</table>
</body>
</html>