<HTML>
<HEAD>
 <TITLE>intervalo</TITLE>
  <link rel="stylesheet" type="text/css" href="css1.css">
</HEAD>
<BODY>

      <form action="php3.php" method="post" class="formulario">
            <legend>Insira os valores para ter uma serie de numeros crescentes em um intervalo de sua escolha(so pares ou impares): </legend>
            <label>Valor inicial</label>
            <input type="number" pattern="[0-9]+"placeholder="Insira um numero inteiro" name="v1">
            <br>
            <label>Valor final</label>
            <input type="number" pattern="[0-9]+" placeholder="Insira um numero inteiro" name="v2">
            <br>
            <input type="submit" value="Enivar">
      </form>

</BODY>
</HTML>
