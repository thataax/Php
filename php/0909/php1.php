<HTML>
<HEAD>
 <TITLE>php1</TITLE>
 <link rel="stylesheet" type="text/css" href="css1.css">
</HEAD>
<BODY>
<?php
     // VARIAVEIS
     $v1 = $_POST['v1'];
     $v2 = $_POST['v2'];
     
     // PROGRAMAÇÃO
     
     //if ($v1 > $v2){
        //$troca = $v2;
        //$v2 = $v1;
        //$v1 = $troca;
    // }
     echo"<div class='formulario'>";
     echo"<select>";
     if ($v1 < $v2){
     for ($i = $v1; $i <= $v2; $i++)
     {

         echo"<option value='$i'>$i</option>";
     }
     }else{
     for ($i = $v1; $i >= $v2; $i--)
     {

         echo"<option value='$i'>$i</option>";
     }
     }
     echo"</select>"; // select criado na linha 20
     echo"
          <br>
          <a href='form1.php'><button style='width:100%;height:100%;'>Voltar</button></a>
     ";
     echo"</div>"; // div criado na linha 19
?>
</BODY>
</HTML>
