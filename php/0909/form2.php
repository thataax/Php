<HTML>
<HEAD>
 <TITLE>form2</TITLE>
 <link rel="stylesheet" type="text/css" href="css1.css">
</HEAD>
<BODY>
<?php
     echo"<div class='formulario'>";
     echo"<select style='height:10%;'>";
     for ($i = 0; $i <= 50; $i++)
     {
         if ($i % 2 == 0){
         echo"<option value='$i'>$i</option>";
         }
     }
     echo"</select>"; // select criado na linha 20
     echo"</div>"; // div criado na linha 19
?>
</BODY>
</HTML>
