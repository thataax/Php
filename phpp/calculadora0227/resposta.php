<HTML>
<HEAD>
 <TITLE>resposta</TITLE>
</HEAD>
<BODY>
<?php

//variaveis

 $phpn1 = $_POST['n1'];
 $phpn2 = $_POST['n2'];
 $phpop = $_POST['op'];
 $resposta = null;

//--

// verifica se o valor é nulo
     if ($phpn1 == null)
     {$phpn1 = 0;}
     if ($phpn2 == null)
     {$phpn2 = 0;}
     //--
     
     if (($phpop == "/") and ($phpn2 == 0))
     {
        $resposta = "impossivel dividir por zero!";
     }
     else{
         switch($phpop){
                       case "+":
                            if(($phpn1 == 1)and($phpn2 == 1))
                            {          $res = $phpn1+$phpn2;
                                       $resposta = "$res, seu burro!";}
                            else
                            {$resposta = $phpn1+$phpn2;}
                          break;
                       case "-":
                          $resposta = $phpn1-$phpn2;
                          break;
                       case "*":
                          $resposta = $phpn1*$phpn2;
                          break;
                       case "/":
                          $resposta = $phpn1/$phpn2;
                       }
         }
         
         echo"
              <center>
              <h2>Sua Conta:</h2></br>
              <h3><strong>$phpn1 $phpop $phpn2</strong></h3></br>
              <h3>resposta: $resposta</h3>
              </br>
              </br>
              <a href='index.php'><input type='button' value='voltar ao inicio'><a/>
              
              
              </center>

         ";
?>
</BODY>
</HTML>
