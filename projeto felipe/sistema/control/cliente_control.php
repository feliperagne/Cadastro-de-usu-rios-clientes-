<?php 
include_once '../model/cliente_model.php';
$cliente = new Cliente();
if(isset($_GET['acao'])){
    $acao = $_GET['acao'];

}else{
    $acao="";
}

if($acao == "cadastrar"){
    $cliente->setid_cliente($_POST['id_cliente']);
    $cliente->setnome($_POST['nome']);
    $cliente->setemail($_POST['email']);
    $cliente->settelefone($_POST['telefone']);
    $cliente->setendereco($_POST['endereco']);
    $cliente->setcpf($_POST['cpf']);
    $cliente->create();
}else{
    if($acao == "editar"){
        $cliente->setid_cliente($_POST['id_cliente']);
        $cliente->setnome($_POST['nome']);
        $cliente->setemail($_POST['email']);
        $cliente->settelefone($_POST['telefone']);
        $cliente->setendereco($_POST['endereco']);
        $cliente->setcpf($_POST['cpf']);
        $cliente->update();
}else{
    if($acao == "excluir"){
        $cliente->setid_cliente($_POST['id_cliente']);
        $cliente->delete();
    }
}
}
header("Location: ../view/cliente.php");
?>