<HTML>
<HEAD>
 <TITLE>RESULTADO</TITLE>
</HEAD>
<BODY>
<?php
session_start();
$me = $_POST["parcelas"];
echo $_SESSION['mens1'];
echo"<br>";
echo$_SESSION['mens2'];
echo"<br> $me";
echo "<br> Muito obrigada(o)!";
echo "<br> <a href='form1.php'>Voltar ao inicio</a>";
?>
</BODY>
</HTML>
