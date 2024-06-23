<HTML>
<HEAD>
 <TITLE>finalizacao</TITLE>
</HEAD>
<BODY>
<?php

session_start();
$me = $_POST['parc'];
echo"
<h1>".
$_SESSION['mens1']."<br><br>".
$_SESSION['mens2']."<br><br>".
"O metodo de pagamento foi $me <br><br>

Muito obrigado por comprar conosco!
</h1>
<br>
<br>
";

echo"<a href='index.php'>Voltar ao Inicio<a>";

?>
</BODY>
</HTML>
