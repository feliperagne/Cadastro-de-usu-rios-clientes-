<?php 
require_once 'config.php';
class Conexao{
    private static $instance;
    private static $msg;
//METODO QUE EXECUTA O MYSQL
        public static function executar_sql($sql_code){

    try{
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($mysqli->connect_error){
        echo 'Falha na conexão com o banco de dados!';
    }else{
        $sql_query = $mysqli->query($sql_code);
    }
    return $sql_query;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }



}





    //METODO PRA TESTAR O BANCO DE DADOS
    public static function testar_banco(){
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(mysqli_connect_errno()){
            $msg = "Falha de conexão com o banco de dados: " . mysqli_connect_errno();
        }else{
            $msg = "Conexão com o banco de dados bem-sucedida!";
        }
        return $msg;
    }


}

?>