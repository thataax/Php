<HTML>
<HEAD>
 <TITLE>calculadora</TITLE>
</HEAD>
<BODY>
      <center>
              <form name="calculadora" method="post" action="resposta.php" >
                    <legend>Calculadora</legend>
      
                    <label>1o valor:</label>
                    <input type="number" name="n1">
                    </br></br>
                    <select name="op">
                            <option value="+">somar</option>
                            <option value="-">subtrair</option>
                            <option value="*">multiplicar</option>
                            <option value="/">dividir</option>
                    </select>
                    </br></br>
                    <label>2o valor:</label>
                    <input type="number" name="n2">
                    </br></br>
                    <input type="submit" value="calcular">
                    </form>
      </center>
<?php

?>
</BODY>
</HTML>
