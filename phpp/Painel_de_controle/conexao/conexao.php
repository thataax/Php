<?php

class BancoDeDados{
      private $host = "localhost:3306"; //nome ou ip do servidor
      private $user = "root"; //usuario do servidor
      private $senha = "prof@etec"; //senha do usuario
      private $banco = "testeaula"; // nome do banco de dados
      public $con;

      function conecta(){ // funcao que faz a conecxao do BD
               $this->con=mysqli_connect($this->host,$this->user,$this->senha,$this->banco);
      
               //conecta o banco de dados
      
                if(!$this->con){
                                die("problemas com a conexao");
                }

      }
      
      function fechar(){  //funcao que fecha a conexao
               mysqli_close($this->con);
               return;
      }

}
?>

