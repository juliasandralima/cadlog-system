<?php
 
// Inclui arquivos de controlador para lidar com diferentes ações
require 'controllers/AuthController.php'; //inclui o controlador de autenticação
require 'controllers/UserController.php'; //inclui o controlador se usuário
require 'controllers/DashboardController.php'; //inclui o controlador de dashboard
 
// Cria instãncias dos controladores para utilizar seus métodos
$authController = new AuthController(); //intancia o controlador de autenticação = para poder usar
$useController = new $useController();
 
//Coleta a ação da URL, se não houver definida, usa 'login' por padrão
$action = $_GET['action'] ?? 'login';  // Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente
 
switch($action){
    case 'login':
        $authController->login(); // chama o método login do controlador de autentificação
}
 
?>