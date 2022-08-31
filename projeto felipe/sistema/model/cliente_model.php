<?php 
include_once '../conexao/conexao.php';

class Cliente{
private $id_cliente;
private $nome;
private $email;
private $telefone;
private $cpf;
private $endereco;

 public function getid_cliente(){
     return $this->id_cliente;
 }
 public function getnome(){
     return $this->nome;
 }
 public function getemail(){
    return $this->email;
}
 public function gettelefone(){
     return $this->telefone;
    }
    public function getendereco(){
        return $this->endereco;
    }
 
 public function getcpf(){
     return $this->cpf;
 }
 
 public function setid_cliente($id_cliente){
      $this->id_cliente = $id_cliente;
 }
 public function setnome($nome){
     $this->nome = $nome;
}
 public function setcpf($cpf){
     $this->cpf = $cpf;
}
 public function setendereco($endereco){
     $this->endereco = $endereco;
}
public function settelefone($telefone){
    $this->telefone = $telefone;
}
public function setemail($email){
    $this->email = $email;
}

 public function read($filtro){
     $sql_code = "SELECT * 
                    FROM cliente WHERE nome LIKE '%$filtro%'";
     $sql_query = Conexao::executar_sql($sql_code);
     return $sql_query;
        }
      
 public function create(){
    $sql_code = "INSERT INTO cliente (nome,email,telefone,endereco,cpf) 
    VALUES ('".self::getnome()."', '".self::getemail()."', '".self::gettelefone()."', 
    '".self::getendereco()."', '".self::getcpf()."')";
         echo $sql_code;
     $sql_query = Conexao::executar_sql($sql_code);
     return $sql_query;
        }

        public function listarCliente($id_cliente){
            try{
                $sql_code = "SELECT * FROM cliente WHERE id_cliente = $id_cliente";
                $sql_query = Conexao::executar_sql($sql_code);
                $dados = $sql_query->fetch_assoc();
                self::setid_cliente($dados['id_cliente']);
                self::setnome($dados['nome']);
                self::setemail($dados['email']);
                self::settelefone($dados['telefone']);
                self::setendereco($dados['endereco']);
                self::setcpf($dados['cpf']);
            }catch(exception $e){
                echo "Ocorreu um erro ao localizar o Cliente!" . $e;
            }
        }

        public function update(){
            $sql_code = "UPDATE cliente SET
            nome = '" . self::getnome() . "', 
            email = '" . self::getemail() . "',
            telefone = '" . self::gettelefone() . "',
            endereco = '" . self::getendereco() . "',
            cpf = '" . self::getcpf() . "'
            WHERE id_cliente = " . self::getid_cliente();
               echo $sql_code;
               $sql_query = Conexao::executar_sql($sql_code);
               return $sql_query;
        }
        public function delete(){
            $sql_code = "DELETE FROM cliente WHERE id_cliente = " . self::getid_cliente();
            echo $sql_code;
            $sql_query = Conexao::executar_sql($sql_code);
               return $sql_query;
        }
    }  
?>