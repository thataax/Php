<HTML>
<HEAD>
 <TITLE>Produtos</TITLE>
 <meta http-equiv="refresh" content="10">
</HEAD>
<BODY>
<?php

session_start();
if ($_SESSION['Slog']!="ATIVO"){         // verifica se o usuario esta cadastrado

   echo"<script language='javascript' type='text/javascript'>

                alert('VOCE NÃO PODE ENTRAR SEM UM CADASTRO!!!');
                window.location.href='naoentrou.php';

   </script>";
}
?>

<h1>Lista de Produtos</h1>
<h3>verificacao de produto</h3>
<hr>
<form action="cadastro.php" method="post" name="cadastroprin"> <!-- form de cadastro -->
      <h1>Cadastrar novo Produto</h1>
      <input type="submit" name="cadastrar" value="Cadastrar">
</form>

<form action="pesquisa.php" method="post" name="pesquisa"> <!-- form de busca -->
      <h1>busca por tipo:</h1>
      <input type="text" name="textobusca" placeholder="Pesquisar"><br>
      <input type="submit" name="buscar" value="Buscar">
</form>
<?php

require_once('conexao/conexao.php');
$mysql = new BancodeDados();
$mysql->conecta();

if(isset($_POST['buscar']) && !empty($_POST['textobusca'])){

                           $pbusca=$_POST['textobusca'];
                           $sqlstr="select * from tbproduto where tipo='$pbusca'";
}else{
      $sqlstr="select * from tbproduto order by nome";
}
$query=@mysqli_query($mysql->con,$sqlstr);

echo"<table border='1px'>";
echo"
<tr>
    <th width='30px' align='center'>id</th>
    <th width='100px'>Nome</th>
    <th width='100px'>Tipo</th>
    <th width='100px'>Descricao</th>
    <th width='100px'>Deletar</th>
    <th width='100px'>Alterar</th>
</tr>
";
while($dados=mysqli_fetch_array($query)){

                                         echo"
                                              <tr>
                                                  <td align='center'>".$dados['id']."</td>
                                                  <td align='center'><b>".$dados['nome']."</b></td>
                                                  <td align='center'><b>".$dados['tipo']."</b></td>
                                                  <td align='center' width='300px'height='50px'>".$dados['descricao']."</td>
                                         ";
                                         $id = base64_encode($dados['id']);
                                         // $id = $dados['id'];
                                         echo"
                                              <td align='center'><a href='apagar.php?id=".$dados['id']."'><img src='img/delete.png' width='30px' height='30px'></a></td>
                                              <td align='center'><a href='editar.php?id=$id'><img src='img/edit.png' width='30px' height='30px'></a></td>
                                         ";
                                         echo"</tr>";
}
echo"</table>";
$mysql->fechar();
?>
<h1>fim do site</h1>
</BODY>
</HTML>
