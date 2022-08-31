<html>
<head>
    <title>Teste de PHP</title>
   
</head>

<body>
<?php
$cidade = "natal";
$estado = "RN";
$idade = 400;

$frase_capital = "<h3>a cidade de $cidade é a capital do $estado</h3>";
echo $frase_capital;

echo '<hr>';

$carro = array("palio"=>"palio", 'corsa', 'gol', 'golaço');
echo "$carro[1] <br>";
echo $carro["palio"];
$carro[4] = "clio"; //adicionando um carro novo no 4 elemento do array
echo '<br>';
echo "$carro[4]";
echo '<hr>';

$nota1 = 8.6;
$nota2 = 3.9;
$nota3 = 32e10;
echo "$nota3";
$media = ($nota2 + $nota1) / 2;
echo '<br>';
echo "$media";
echo '<br>';
if($media >= 7){
    $status = "aprovado";
} else{
    $status = "reprovado";
}
echo "resultado: $status, Média : $media <br>";
echo '<hr>';

$cont = 1;
while($cont < 10){
    echo "valor: $cont <br>";
    $cont ++;
}
echo '<br>';
do{
    echo "o valor é de: $cont <br>";
    $cont++;
} while($cont < 5);
echo '<br>';
for($cont = 0;$cont <10;$cont++){
    echo "o valor é de: $cont <br>";
}
echo '<hr>';
?>

<form method="post">
    <p>informe o valor 1: 
    <input type="number" id="1" name="vlr1">
    </p>

    <p>informe o valor 2:
    <input type="number" id="2" name="vlr2">
    </p>
    <input type="submit" value="Calcular">
</form>
<?php

function somar_valores($n1,$n2){
    $soma = $n1 + $n2;
    return $soma;
}


if(isset($_POST['vlr1'], $_POST['vlr2'])){ //VALIDAR SE OS CAMPOS FORAM PREENCHIDOS

$n1 = $_POST['vlr1']; //PEGAR O NUMERO COLOCADO NO CAMPO DO FORMULARIO E USADO
$n2 = $_POST['vlr2'];
if(empty($n1) or empty($n2)){
    echo 'informe 2 numeros, queridão...';
}else{
$soma = somar_valores($n1,$n2);
echo "soma dos valores: $soma";
}

} else{

    echo 'Informe os 2 numeros, queridão...';
}







?>
</body>
</html>
