<HTML>
<HEAD>
 <TITLE>entrada</TITLE>
</HEAD>
<BODY>
<?php

 $nome = $_POST["nome"];
 $senha = $_POST["senha"];
 //funclogar//
 
function logar($no, $ni, $log){
         echo"voce logou com sucesso!";
         session_start();
         $_SESSION['nome'] = $no;
         $_SESSION['nivel'] = $ni;
         $_SESSION['log'] = $log;
         echo"<br><a href='principal.php'> <b>Pagina principal</b> </a>";
}
 
 //CODIGO//
 if (($nome=="adm")&&($senha=="8008")){
    logar($nome, "adm", "ativo");
  }
  else if(($nome=="leonel")&&($senha=="incel")){
       logar($nome, "usuario", "ativo");
  }
  else{
       echo"senha ou login invalido!";
       echo"<br><a href='index.php'> <b>Voltar ao inicio</b> </a>";
       
  }
 

?>
</BODY>
</HTML>
