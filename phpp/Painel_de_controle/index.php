<!--

ser� treinado nesse projeto, o uso de sess�o e posteriormente,
o uso de banco de dados.

-->

<HTML>
<HEAD>
 <TITLE>site</TITLE>
 <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
 <meta charset="utf-8">
</HEAD>
<BODY bgcolor="#3729fa">

      <h1>P�gina Principal de entrada para o login "HOME"</h1>
      <br><br><br>
      <center>
      <form action="entrada.php" method="post" enctype="multipart/form-data">

            <table bgcolor="#eaeaff" cellpadding="2" cellspacing="5"><!-- tabela para organizar os elementos do form -->
                   <tr>
                       <td colspan="2" align="middle"><h1>LOGIN<h1></td>
                   </tr>
            
                   <tr>
                       <td><label for="flogin">EMAIL</label> <!-- CAMPO LOGIN --></td>
                       <td><input name="flogin" type="text" placeholder="email@dominio.com" id="_login_entrada"/></td>
                   </tr>
                   <tr>
                       <td> <label for="fsenha">SENHA</label> <!-- CAMPO SENHA --></td>
                       <td><input name="fsenha" type="password" placeholder="senha" id="_senha_entrada"/></td>
                   </tr>
                   <tr>
                       <td colspan="2" align="middle"><input name="fsubmit" type="submit" value="Entrar" id="_submit_entrada"></td>
                   </tr>

            </table>
            
      </form>
      </center>
<?php

?>
</BODY>
</HTML>
