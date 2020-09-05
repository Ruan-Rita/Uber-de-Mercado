
<?php
session_start(); # Deve ser a primeira linha do arquivo

require("class_pedido.php");


$comprimento = (float)$_POST['c'];
$largura = (float) $_POST['l'];
$altura = (float) $_POST['h'];
$peso = (float) $_POST['p'];

$pesoCubico = ($comprimento * $largura * $altura) / 6000;



if ($pesoCubico > 5) {
    $pedido = new pedido($comprimento, $largura, $altura, $pesoCubico);
    $pedido->cadastrar();

    $_SESSION['valor'] = $pesoCubico;
    echo "<script>alert('Valor: $pesoCubico');location.href=\"result.php\";</script>";
} else if ($pesoCubico <= 5 && $pesoCubico > 0) {
    $pedido = new pedido($comprimento, $largura, $altura, $peso);
    
    $pedido->cadastrar();
    $_SESSION['valor'] = $peso;
    header('Location: result.php');
} else {
    echo "<script>alert('Dados invalido');location.href=\"cubo.php\";</script>";
}
?>



