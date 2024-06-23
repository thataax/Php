<HTML>
<HEAD>
 <TITLE>leonel bandeira</TITLE>
</HEAD>
<BODY>

<form action="checpag.php" method="post">

      <label>Produto</label>
      <input name="prodname" value="" type="text">
      <br><br>
      <label>Quantidade</label>
      <input name="prodquant" value="" type="number">
      <br><br>
      <label>Preco</label>
      <input name="prodpreco" value="" type="text">
      <br><br>
      <label>Valor minimo das parcelas</label>
      <input name="minparce" value="" type="text">
      <br><br>
      <label>Numero de parcelas</label>
      <select name="numparce">
      
      <?php
      for($i = 1;$i<=60;$i++){
             echo"<option value$i>$i</option>";
      }
      ?>
      </select>
      <br><br>
      <input name="submit" type="submit" value="cadastrar">

</form>


</BODY>
</HTML>
