<HTML>
<HEAD>
 <TITLE>cadastro</TITLE>
</HEAD>
<BODY>

<h3><center><font color="red" size="5">SESSÃO EFETUADA</font></center></h3>


<?php
session_start();

if ($_SESSION['Slog'] != "ATIVO"){
   echo"<script language='javascript' type='text/javascript'>

                alert('VOCE NÃO PODE ENTRAR SEM UM CADASTRO!!!');
                window.location.href='naoentrou.php';

   </script>";
}

echo utf8_encode("o usuario logado no momento é ");
echo utf8_encode($_SESSION['Snome']);
echo utf8_encode("<br> o nível dele é ".$_SESSION['Snivel']."\n\n");

?>
<center>
<h2>Cadastro de uma pesquisa</h2>
<form name="fcadastro" action="pagcadastro.php" method="post">

            <table bgcolor="#eaeaff" cellpadding="2" cellspacing="5"><!-- tabela para organizar os elementos do form -->
                   <tr>
                       <td colspan="2" align="middle"><h1>CADASTRO<h1></td>
                   </tr>

                   <tr>
                       <td><label for="fnome">NOME</label> <!-- CAMPO LOGIN --></td>
                       <td><input name="fnome" type="text" placeholder="fernanda" id="_nome_cadastro"/></td>
                   </tr>
                   <tr>
                       <td> <label for="ftipo">TIPO</label> <!-- CAMPO SENHA --></td>
                       <td><input name="ftipo" type="text" placeholder="sensual" id="_tipo_cadastro"/></td>
                   </tr>
                   <tr>
                       <td> <label for="fdesc">DESCRIÇÃO</label> <!-- CAMPO SENHA --></td>
                       <td><input name="fdesc" type="text" placeholder="sou sensual" id="_desc_cadastro"/></td>
                   </tr>
                   <tr>
                       <td colspan="2" align="middle"><input name="fsubmit" type="submit" value="Cadastrar" id="_submit_entrada"></td>
                   </tr>
                   <tr>
                       <td colspan="2" align="middle"><a href="pesquisa.php"><input name="" type="button" value="Nova Pesquisa" id="_submit_entrada"></a></td>
                   </tr>
                   <tr>
                       <td colspan="2" align="middle"><a href="fechar_sessao.php"><input name="" type="button" value="Logout" id="_submit_entrada"></a></td>
                   </tr>

            </table>

      </form>
</center>
</BODY>
</HTML>
