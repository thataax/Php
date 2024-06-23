<HTML>
<HEAD>
 <TITLE>upload imagens</TITLE>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="style.css">
</HEAD>
<BODY bgcolor=#DEDDDE">
<font face="caviar dreams">
<h1>Subindo uma imagem para o servidor</h1>


<?php
  echo"<br><br>
               <div class='form_content'>
               <form method='post' enctype='multipart/form-data' action='Upload.php'>
               <h3>Selecione uma imagem:</h3>
               <br>
               <input name='arquivo' type='file'>
               <br><br>
               <input name='salvar' type='submit' value='Enviar'>
               <br>
               </form>
               </div>
               "
?>
</BODY>
</HTML>
