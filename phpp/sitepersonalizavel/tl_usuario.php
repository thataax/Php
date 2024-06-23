<HTML>
<HEAD>
<?php

$nome = $_POST["nome"];
$cont = $_POST["conteudo"]; // cont significa conteudo!!
$bgcor= $_POST["bgcor"];
$textcor=$_POST["textcor"];
$pfimg=$_POST["pfimg"]; // pf siginifica "profile perfil"

// codigo html
echo"


<TITLE>perfil do $nome</TITLE>
</HEAD>
<BODY bgcolor='$bgcor' text='$textcor'>
      <h1>Bem vindo $nome!</h1>
      <img src='$pfimg' width='960px' height='540px'>
      <h3>$cont</h3>



      <a href='index.php'><h1>Voltar a tela de customizacao</h1></a>
";

?>
</BODY>
</HTML>
