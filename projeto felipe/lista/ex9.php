<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio 9</title>
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
    padding: 16px;"><h3>Exercicio 9</h3>
<h5>Criar 2 vetores com 5 números inteiros cada. 
    Gerar um terceiro vetor, com a soma do 1 e segundo vetor.</h5></div>
    <br>
    <br>
    <h5 style="padding-left:2rem;">Resposta:</h5>
    </head>
    <body>
    <form method="post" style="margin-left:2rem;">
<div class="row">
  <div class="col-5">
  <br/>
    <p>Insira os valores para o 1° vetor</p>
    <br/>
    <br/>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num1">
		</p>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num2">
		</p>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num3">
		</p>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num4">
		</p>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num5">
		</p>
      </div>

      <div class="col-5">
      <br/>
      <p>Insira os valores para o 2° vetor</p>
      <br/>
      <br/>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num6">
		</p>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num7">
		</p>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num8">
		</p>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num9">
		</p>
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num10">
		</p>
      </div>


</div>
<br/>
<input type="submit" value="Fazer soma dos 2 vetores">
</form>
<?php
function somar_vetores($vet1, $vet2) {   
  echo "soma(Vetor 1) = ".array_sum($vet1);
  echo "<br/>";
  echo "soma(Vetor 2) = ".array_sum($vet2);
  echo "<br/>";
  echo "Soma dos dois Vetores: "; 
  echo $vet3 = array_sum($vet1) + array_sum($vet2);

}
?>

<?php
if(isset($_POST['num1'],$_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'],
$_POST['num6'],$_POST['num7'], $_POST['num8'], $_POST['num9'], $_POST['num10'])){

$vetor1 = array($_POST['num1'],$_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'] );
$vetor2 = array($_POST['num6'],$_POST['num7'], $_POST['num8'], $_POST['num9'], $_POST['num10'] );  

    if(empty($vetor1) && empty($vetor2)){
        echo"<br/>";
        echo"Informe os números,queridão...";
}
    else{
    echo"<br/>";
    echo somar_vetores($vetor1, $vetor2);
    }
}
    else{
        echo"<br/>";
        echo"Informe os números,queridão...";
}
?>
    <div style="border-top: 1px solid #1867c0;
  bottom: 0;
  left: 0;
  height: 40px;
  position: sticky;
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