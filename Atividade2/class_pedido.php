<?php

    class pedido{
        
        public $comprimento;
        public $largura;
        public $altura;
        public $pesoCalculado;

        public function __construct($c,$l,$a,$p){
            echo "Chamando o cosntrutor Pedido<br>";
            $this->comprimento = $c;
            $this->largura = $c;
            $this->altura = $c;
            $this->pesoCalculado = $c;
        }

        public function cadastrar(){
            try{
                $conecta=new PDO("mysql:host=127.0.0.1;port=3306;dbname=encomenda","root","");
                $conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
                $sql="INSERT INTO pedido  VALUE (NULL,'".$this->comprimento."','".$this->largura."', '".$this->altura."', '".$this->peso."');";
        
                $conecta->exec($sql);
        
                echo "Dados gravados com sucesso...";
        
            }catch(PDOException $erro){
                echo "Problemas de conexão...";
            }
        }

    }