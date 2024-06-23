<HTML>
<HEAD>
 <TITLE>LOJA</TITLE>
</HEAD>
<BODY>
      <div>
           <form action="form1res.php" method="post">
                 <label>PRODUTO</label><br>
                 <input type="text" name="prod"><br>
                 <label>QUANTIDADE</label><br>
                 <input type="number" name="quant"><br>
                 <label>PRECO</label><br>
                 <input type="double" name="preco"><br>
                 <label>VALOR MINIMO DAS PARCELAS</label><br>
                 <input type="double" name="vmp"><br>
                 <label>NUMERO DE PARCELAS</label>
                 <select name="parcelas">
                         <?php
                              for ($x=1;$x<=60;$x++) {
                                  echo"<option value='$x'> $x </option>";
                              }
                         ?>
                 </select>
                 <br>
                 <input type="submit" name="ok" value="ENVIAR"><br>
           </form>
      </div>
<?php

?>

</BODY>
</HTML>
