<?php

    class aluguel{

        // ATRIBUTOS
        public $nome;
        public $preco;

        public function __construct($nome, $preco){
            echo "Chamando o cosntrutor<br>";
            $this-> nome = $nome;
            $this->preco= $preco;
        }

        //METODOS
        public function alterarPreco($valor){
            $this->preco = $valor;
        }
    }
?>