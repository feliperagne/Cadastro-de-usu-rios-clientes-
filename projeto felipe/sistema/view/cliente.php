<?php 
include_once '../model/cliente_model.php';
$cliente = new Cliente();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Clientes já Cadastrados</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../estilo.css">
        <link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
    <div class="titulo"><h3>Listagem de Clientes já Cadastrados</h3></div>
    </head>
    <body style="grid-template-columns: 1fr;margin:0px;height: calc(100vh - 180px);
    background-color: white;
    padding: 5px;overflow-y: scroll;">
    <form method="post" action="../view/cliente_detalhe.php?acao=cadastrar" id="cadastro" name="cadastro">
        <a href="../../index.php" class="button2">Voltar</a>
    <div class="container">
    <button class="btn2" style="margin-top:4rem;"><a style="color:whitesmoke;">Novo Cadastro</a></button>
</div>
    </form>
    <form role="search">
        <input class="form-row col-6" style="margin-left:27rem;" name="busca" type="search" placeholder="Pesquisar Cliente" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    <div class="col-12 align-self-center">
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Endereço</th>
        </tr>
    </thead>
    <?php
    //conexão com o objeto para realizar a leitura dos dados
    if(isset($_GET['busca'])){
        $filtro = $_GET['busca'];

    }else{
        $filtro = "";
    }

    $sql_query = $cliente->read($filtro);
    if($sql_query->num_rows == 0){
    ?>
    <tbody>
    <tr>
      <td colspan="3">Nenhum Registro Encontrado...</td>
    </tr>
    <?php
       }
       else
       {
          while($dados = $sql_query->fetch_assoc())
          {
    ?>
        <tr>
            <td><?php echo $dados['id_cliente'];?></td>
            <td><?php echo $dados['nome'];?></td>
            <td><?php echo $dados['telefone'];?></td>
            <td><?php echo $dados['email'];?></td>
            <td><?php echo $dados['cpf'];?></td>
            <td><?php echo $dados['endereco'];?></td>
            <td>
                <a href="../view/cliente_detalhe.php?acao=editar&&id=<?php echo $dados['id_cliente']; ?>" class="btn btn-warning">Alterar</a>
            </td>
            <td>
                <a href="../view/cliente_detalhe.php?acao=excluir&&id=<?php echo $dados['id_cliente']; ?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php
            }
         }
        ?>
    </tbody>
</table>
    </div>
    <br>
    <footer style="bottom: 0;
    position: fixed;
    width: 100%;
    text-align: center;" class="rodape">Felipe Silveira 2022 @ Todos os direitos reservados</footer>
    <script src="../../jquery-3.6.0.min.js"></script>
<script src="../../bootstrap.min.js"></script>
    </body>
</html>