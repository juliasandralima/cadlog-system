<?php
class Database{
    //utiliza padrão singleton, cujo objetivo é garantir que apenas uma única instância  de classe seja criada durante a execução do programa, e que essa instância seja utilizada sempre que necesário,
    private static $instance = null;
 
    // método público que retorna a conexão com BD
    public static function getConnection(){
        // verifica se a instância de conexão ainda não criada
if(!self::$instance){
    $host     ='localhost';
    $db       = 'sistema_usuario';
    $user     = 'root';
    $password ='';
//a conexão usa o driver mysql (mysql) e as informações de host e DB
self::$instance = new
PDO("mysql:host=$host;dbname=$db", $user, $password);
self::$instance->setAttribute(PDO::ATTR_ERMODE, PDO::ERMODE::EXCEPTION);
}
return self::$instance;
       
    }
}
?>
