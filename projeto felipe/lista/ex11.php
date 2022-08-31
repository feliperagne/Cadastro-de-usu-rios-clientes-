<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio 11</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../estilo.css">
        <link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
<div style="grid-area: cabecalho;
    background-color: #1867c0;
    color: white;
    display: flex;
    flex-direction: column;
    justify-self: center;
    align-items: center;
    padding: 16px;"><h3>Exercicio 11</h3>
<h5>Cria uma funcionalidade onde seja possível o usuário calcular a média de 4 avaliações. 
    Exibir no final se o mesmo foi ou não aprovado em uma disciplina, 
    considerando os critérios de avaliação da faculdade.</h5></div>
    <br>
    <br>
    <h5>Resposta:</h5>
    </head>
    <body>
    <form method="post">
    <p>Informe a 1° nota: 
    <input type="number" id="1" name="n1">
    </p>
    

    <p>Informe a 2° nota:
    <input type="number" id="1" name="n2">
    </p>
    

    <p>Informe a 3° nota:
    <input type="number" id="1" name="n3">
    </p>
    

    <p>Informe a 4° nota:
    <input type="number" id="1" name="n4">
    </p>
    <input type="submit" value="Calcular Média">
</form> 
<?php
function calcular_media($nota1, $nota2, $nota3, $nota4){   
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    if($media < 7){
      echo "Reprovado, a média ficou $media." . ' Estude mais, queridão...';
    }
    else{
      echo "Aprovado, a média ficou $media" . ', parabens!';
    }
}
?>

<?php
    if(isset($_POST['n1'],$_POST['n2'], $_POST['n3'], $_POST['n4'])){
    $nota1 = $_POST['n1'];  
    $nota2 = $_POST['n2'];  
    $nota3 = $_POST['n3'];  
    $nota4 = $_POST['n4'];  

    if(empty($nota1) && empty($nota2) && empty($nota3) && empty($nota4)){
        echo"<br/>";
        echo"Informe os números, queridão...";
    }
        else{
            echo"<br/>";
            echo calcular_media($nota1, $nota2, $nota3, $nota4);
    }
}
    else{
        echo"<br/>";
        echo"Informe os números, queridão...";
    }
?>
    <div style="border-top: 1px solid #1867c0;
  bottom: 0;
  left: 0;
  height: 40px;
  position: fixed;
  width: 100%;"><footer style="grid-area: rodape;
    background-color: whitesmoke;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    font-size: 1.2rem;
    padding: 0px 20px;
    color: #1867c0;
    bottom: 0px;
    height: 40px;">Felipe Silveira 2022 @ Todos os direitos reservados</footer></div>
    <script src="../../jquery-3.6.0.min.js"></script>
<script src="../../bootstrap.min.js"></script>
    </body>
    
</html>