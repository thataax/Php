<HTML>
<HEAD>
 <TITLE>principal</TITLE>
</HEAD>
<?php
session_start();

$nome = $_SESSION['nome'];
$nivel = $_SESSION['nivel'];
$log = $_SESSION['log'];
//fazer login//
if($_SESSION['nivel']=="adm"){
$cortext="blue";
$bgcor="cyan";
$mens="tela do administrador";
$foto="img/img3.jpg";
}
else if($_SESSION['nivel']=="usuario"){
$cortext="yellow";
$bgcor="orange";
$mens="tela do usuario";
$foto="img/img2.jpg";
}
else{
$cortext="blue";
$bgcor="cyan";
$mens="voce nao esta logado!";
$foto="img/img1.jpg";
}
echo"

<body bgcolor='$bgcor' text='$cortext'>".// BODY ABERTO NO PHP, FECHADO NO HTML
"<h1>$mens</h1>
<h3>seja bem vindo ".$_SESSION['nome']."!</h3>
<img src='$foto' width='1024' height='512'>
<br>
<br><a href='index.php'> <b>Voltar ao inicio</b> </a>
";


//codigo//

?>
</BODY>
</HTML>
