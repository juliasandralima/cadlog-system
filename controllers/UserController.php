<?php
// definição da classe UserController, responsável por gerenciar as ações relacionadas aos usuários
class UserController
{
public function register(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
$data = [
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), //Critografa a senha
    'perfil' => $_POST['perfil']
 
];
User::create ($data);
    }else{
        //se a requisição não for POST (por exemplo,GET), carrega a página de registro
        include 'views/register.php';
    }
}
}
?>