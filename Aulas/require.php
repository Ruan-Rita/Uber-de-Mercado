<?php

require("classe.php");

//INSTANCIACAO DA CLASSE EM PHP
$minhaclasse = new aluguel("Ruan Rita", 1500);

//$minhaclasse->alterarPreco(700);
echo $minhaclasse->nome."<br>";
echo $minhaclasse->preco;
?>