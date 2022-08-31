<?php 
include_once '../model/cliente_model.php';
$cliente = new Cliente();
if(isset($_GET['id']) and ($_GET['acao'] == "editar" || $_GET['acao'] == "excluir")){
    $id_cliente = $_GET['id'];
    $cliente->listarCliente($id_cliente);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Cliente</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../estilo.css">
        <link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
    <div class="titulo"><h3>Formulário para cadastro de Clientes</h3></div>
    </head>
    <body style="grid-template-columns: 1fr;margin:0px;height: calc(100vh - 180px);
    background-color: white;
    padding: 5px;overflow-y: scroll;">
    <form   action="../control/cliente_control.php?acao=<?php echo $_GET['acao']; ?>" method="post" id="cadastro" name="cadastro" onsubmit="" style="margin:10px; padding:10px;margin-bottom:10px;">
        <div class="row">
        <div class="form-group col-1" style="margin-top:10px;">
                <label for="id">Id</label>
                <input type="text" readonly class="form-control" id="id" name="id_cliente" value="<?= $cliente->getid_cliente(); ?>" >
            </div>
            <div class="form-group col-7" style="margin-top:10px;">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="nome" value="<?= $cliente->getnome(); ?>">
            </div>
            </div>
        <div class="row">
            <div class="form-group col-3"style="margin-top:10px;">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Informe o e-mail" value="<?= $cliente->getemail(); ?>">
            </div>
            <div class="form-group col-3"style="margin-top:10px;">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe o telefone" value="<?= $cliente->gettelefone(); ?>">
            </div>
            <div class="form-group col-2"style="margin-top:10px;">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o cpf" value="<?= $cliente->getcpf(); ?>">
            </div>
            <div class="form-group col-4"style="margin-top:10px;">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço" value="<?= $cliente->getendereco(); ?>">
            </div>
        </div>
        <div class="container">
    <button class="btn2"><a style="color:whitesmoke;">Cadastrar</a></button>
    </div>
            <a href="../view/cliente.php" class="button2">Voltar</a>
    </form>
    <br/>  
    <div class="col-8 align-self-center">
        <footer style="bottom: 0;
        position: fixed;
        width: 100%;
        text-align: center;" class="rodape">Felipe Silveira 2022 @ Todos os direitos reservados</footer>
    <script src="../../jquery-3.6.0.min.js"></script>
<script src="../../bootstrap.min.js"></script>
    </body>
</html>