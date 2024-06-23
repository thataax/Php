<HTML>
<HEAD>
 <TITLE>parcelas</TITLE>
</HEAD>
<BODY>
<?php
session_start();
$prod = $_POST['prodname'];
$qprod = $_POST['prodquant'];
$pprod = floatval($_POST['prodpreco']);
$minparce = floatval($_POST['minparce']);
$numparce = $_POST['numparce'];

$valor=$qprod*$pprod;
$m1="O produto vendido foi '".$prod."' no valor total de R$".number_format($valor,2).".";
$m2 = "O preco unitario foi de R$".number_format($pprod,2).". A quantidade comprada foi de ".$qprod.".";

$_SESSION['mens1'] = $m1;
$_SESSION['mens2']= $m2;

// codigo

echo"$m1 <br><br>";
// FORMULARIO DE REVISAO DE PARCELAS
echo"
     <form action='finaliza.php' method='post'>
     <select name='parc'>";
     
             $m="a vista valor de R$ ".number_format($valor-($valor*0.05),2)." com desconto de 5%";
             echo"<option value='$m'>$m</option>";
             $m ="boleto no valor de R$ ".number_format($valor+10, 2)." com taxa bancaria de R$ 10.00";
             echo"<option value='$m'>$m</option>";

             for($i=1;$i<=3;$i++){
                                  if($valor/$i >= $minparce){
                                               $m= $i." parcelas de R$ ".number_format(($valor/$i),2)." sem juros";
                                  }
                                  echo"<option value='$m'>$m</option>";
             }

             
             for($i=4;$i<=$numparce;$i++){
             $caljuros=$valor+($valor*(0.02*($i-3)));
             if($caljuros/$i >= $minparce){
                             $m= $i." parcelas de R$ ".number_format(($caljuros/$i),2)." com juros";
             }
             echo"<option value='$m'>$m</option>";
             }

             
             

     echo"</select>
     <input type='submit' value='Finalizar'>
     </form>
";

?>
</BODY>
</HTML>
