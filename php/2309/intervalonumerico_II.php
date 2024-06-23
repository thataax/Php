<HTML>
<HEAD>
 <TITLE>intervalo numerico da escolha do usuario</TITLE>
</HEAD>
<BODY>
      <div style="position:absolute; top:30%;width:98%;"> <!-- div feito para centralizar verticalmente o form -->
      <h1 align="center">intervalo numerico da escolha do usuario</h1>
      <form action="intervalonumerico_I.php" method="post">
            <center>
                    <label>Digite o valor inicial do intervalo:</label>
                    <input type="number" name="f_v1">
                    <BR><BR>
                    <label>Digite o valor final do intervalo:</label>
                    <input type="number" name="f_v2">
                    <BR><BR>
                    <select name="f_tipo">
                            <option value="P">par</option>
                            <option value="I">impar</option>
                            <option value="A">ambos</option>
                    </select>
                    <BR><BR>
                    <input type="submit" name="submit" value="enviar">
            </center>
      
      </form>
      </div>
</BODY>
</HTML>
