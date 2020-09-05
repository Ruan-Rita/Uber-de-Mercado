
<?php

require("class_pedido.php");


$comprimento = (float)$_POST['c'];
$largura = (float) $_POST['l'];
$altura = (float) $_POST['h'];
$peso = (float) $_POST['p'];

$pesoCubico = ($comprimento*$largura*$altura) / 6.000;


if($pesoCubico >5){
    header('Location: result.php');
}else{
    echo "<script>alert('Dados Invalido!');location.href=\"cubo.php\";</script>";
}
?>



