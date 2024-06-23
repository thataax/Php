<HTML>
<HEAD>
 <TITLE>form2</TITLE>
</HEAD>
<BODY>
<?php

//verifica se foi enviado um arquivo

if (isset($_FILES['arquivo']['name'])&& $_FILES['arquivo']['error'] == 0){
   $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
   $nome = $_FILES['arquivo']['name'];

   $extensao = pathinfo($nome, PATHINFO_EXTENSION);
   $extensao = strtolower($extensao);
   echo $extensao;
   
   if(strstr('.jpg;.jepg;.gif;.png;.jiff',$extensao)){
   
                                                      //$novonome = uniqid(time()).".".$extensao;
                                                      $novonome = $nome;
                                                       $destino = 'img/'.$novonome;
                                                     // $destino = $novonome;
                                                      if (@move_uploaded_file($arquivo_tmp,$destino)){
                                                      // if (@move_uploaded_file($arquivo_tmp,$destino)){
                                                      
                                                         echo"salvo na pasta \n \n";

                                                         echo'
                                                         <center><img src = "'.$destino.'" height=400 width=790></center>
                                                         ';
   
                                                      }
                                                      else
                                                      {
                                                         echo utf8_encode('Erro ao salvar o arquivo. Aparentemente você não têm permissão de escrita. <br>');
                                                      }
   
   }
   else
   {
       echo utf8_encode("Você poderá enviar apenas arquivos *.jpg; *.jpeg; *.gif; *.png <br>");
   }
   
}
else

    echo utf8_encode("Você não enviou nenhum arquivo!");
    
    echo"
         <script language='javascript' type='text/javascript'>

         alert('voltando para o cadastro'); windows.location.href='form1.php';
         </script>";


?>
</BODY>
</HTML>
