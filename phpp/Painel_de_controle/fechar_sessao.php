<html>
<head>
<title>fechar sessao</title>
</head>
<body>
<?php

session_start();
if($_SESSION['Slog'] == "ATIVO")
{
	
	session_destroy();
	session_unset();
	session_start();
	$_SESSION['Slog'] = "DESATIVADO";
	
	echo"
	
		<script language='javascript' type='text/javascript'>
			alert('Obrigado! nos vemos em breve!');
			window.location.href='index.php';
		</script>
	
	";
	
}
else
{
	
	echo"
	
		<script language='javascript' type='text/javascript'>
			alert('voce nao esta logado, faca o login primeiro');
			window.location.href='index.php';
		</script>
	
	";
	
}

?>
</body>
</html>