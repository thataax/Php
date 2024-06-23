<HTML>
<HEAD>
 <TITLE>CONFIRMACAO</TITLE>
</HEAD>
<BODY>
<?php
session_start();
$prod=$_POST["prod"];
$preco=$_POST["preco"];
$quant=$_POST["quant"];
$vmp=$_POST["vmp"];
$nparc=$_POST["parcelas"];
$prod=$_POST["prod"];
$valor = $preco * $quant;
$m1 = "O produto vendido foi ".$prod." no valor do R$".number_format($valor,2);
$m2 = "O preco unitario foi de R$".number_format($preco,2);
$_SESSION['mens1']=$m1;
$_SESSION['mens2']=$m2;
echo"O total da sua compra foi R$".number_format($valor,2);
echo"<form action='form1resfinal.php' method='post'>"; //tag form
           echo"<br> <select name='parcelas'>"; // tag select
                     $m = "a vista valor de R$ ".number_format($valor-($valor*0.05),2)." desconto de 5%";
                     echo"<option value='$m'>$m</option>"; // tag option
                     $m = "boleto o valor de R$ ".number_format((valor+10),2)." com taxa bancaria de R$ 10,00";
                     echo"<option value='$m'>$m</option>"; // tag option
                     for($x=1;$x<=3;$x++) {
                                          if ($valor/$x >= $vmp){
                                             $m=$x." parcelas de R$".number_format(($valor/$x),2)." sem juros";
                                             echo"<option value='$m'>$m</option>"; //tag option
                                          }
                     }
                      for ($x=4;$x<=$nparc;$x++){
                          $calculo_juros = $valor + $valor*(0.02*($x-3));
                          if ($calculo_juros/$x >= $vmp) {
                             $m = $x." parcelas de R$".number_format(($calculo_juros/$x),2)." com juros";
                             echo"<option value='$m'>$m</option>"; //tag option
                             }
                      }
           echo"</select>"; // tag select aberta na linha 21
echo"<input type='submit' value='finalizar pagamento'>";
echo"</form>"; // tag form aberta na linha 20
?>
</BODY>
</HTML>
