<!-- Professora C�lia Regina Bueno Figueira
  Etec de Po�
 salvar como cadastro.php -->
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<body>
<h3><center><font color="red" size=5> entrou teste sess�o</h3> </center>  </font>
<?php
session_start();
if ($_SESSION['log'] != "ativo"){
 echo"<script language='javascript' type='text/javascript'>
alert('Precisa esta logado para acessar o conte�do');
window.location.href='../naoentrou.php';</script>";
}
echo utf8_encode("o usuario logado no momento � ");
echo utf8_encode($_SESSION['nome']);
 echo utf8_encode("<br> o nivel dele � ". $_SESSION['nivel']."\n \n");
?>
<h2>cadastro de uma pesquisa <h3>
<form name="cadastro" action="mostrar_cadastro.php" method="POST">
 <p><b>Nome: </b><u><b><font size=5><input type="text" name="fnome" ></font></u></b><br>
<p><b>Tipo: </b><input type="text" name="ftipo"><br>
<p><b>Descri��o: </b><input type="text" name="fdescricao"><br>
<br><p>		<input type="submit"  name="cadastrar" value="cadastrar" >
</form>
<br>
  <form name='' action='pesquisa.php' method='POST'>
 <input type='submit'  name='nova' value='Nova pesquisa' >
 </form>

 <form name='' action='fechar_sessao.php' method='POST'>
   <input type='submit'  name='sair' value='logout' >
</form>
<br>  <br>
</body>
</html>

