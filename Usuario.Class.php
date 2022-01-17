<?php
class Usuario {
    public function login($user, $password){
        $sql = "SELECT * FROM usuarios WHERE user = :user AND password = :password";
        $sql = Conexao::getConn()->prepare($sql);
        $sql->bindValue("user", $user);
        $sql->bindValue("password", md5($password));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            session_start();
            $dados = $sql->fetch();
            $_SESSION['id'] = $dados['id'];
            header("Location: Home.php"); exit;
        }else{
            echo "<script>alert('Dados inválidos!')</script>";
        }
    }
}
/* Esta classe contém a função para efetuar o login, baseado nas informações que serão obtidas por meio do formulário */