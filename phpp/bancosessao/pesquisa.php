<html>
<head>
	<title> Mostra Produto</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="refresh" content="300"> >
</head>
<body bgcolor="cyan">

<?php
session_start();
if ($_SESSION['log'] != "ativo"){


echo"<script language='javascript' type='text/javascript'>alert('Precisa esta logado para acessar o conte�do');window.location.href='index.php';</script>";
}
?>



<h1> Lista dos produtos <h1>

	<h3> Verifica��o do conteudo  </h3>

<hr>
<form action="cadastro.php"method="POST" name="cadastroprin">
<h1>cadastrar novo produto</h1>
<input type="submit" name="Cadastrar" value="cadastrar">
</form>
 <form action=""method="POST" name="">
<h1>busca por tipo </h1>
<input type = "text" name=textobusca><br>
<input type="submit" name="buscar" value="Buscar">
</form>
 <?php

       require_once('conexao/conexao.php');
	//criando o objeto mysql e conectando ao banco de dados
	$mysql = new BancodeDados();
	$mysql->conecta();
     if(isset($_POST['buscar']) && !empty($_POST['textobusca'])){
     $pbusca=$_POST['textobusca'] ;
      $sqlstring = "select * from tbproduto where tipo='$pbusca'";
    } else{
         $sqlstring = 'select * from tbproduto order by nome';
    }
    $query = @mysqli_query($mysql->con, $sqlstring);


	echo "<table border='1px'>";
	echo "<tr><th width='30px' align='center'>Id</th><th width='100px'>Nome</th><th width='100px'>tipo</th><th width='100px'>Descri��o</th><th width='100px'>Deletar</th><th width='100px'>Alterar</th> ";

	while($dados=mysqli_fetch_array($query))
	{
		echo "<tr>";
		echo "<td align='center'>". $dados['id']."</td>";
		echo "<td align='center'><b>". $dados['nome']."</b></td>";
		echo "<td align='center'><b>". $dados['tipo']."</b></td>";
		echo  "<td align='center' width='250px'><b>". $dados['descricao']."</b></td>";
  		$id = base64_encode($dados['id']);
  	//$id = $dados['id'];
      	echo "</td> <td align='center'><a href='apagar.php?id=".$dados['id']."'><img src='deleta.png' width='30px' height='30px'></a>";
        echo "</td> <td align='center'><a href='alteratipo.php?id=$id'><img src='alterar.jpg' width='30px' height='30px'></a>";

echo "</tr>";
	}
	echo "</table>";

	$mysql->fechar();

?>


<br> <br><a href='cadastro.php'>Voltar para tela de cadastro</a>


</body>
</html>
