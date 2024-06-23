<HTML>
<HEAD>
 <TITLE>Entrando...</TITLE>
</HEAD>
<BODY>
<?php
require_once('conexao/conexao.php');
$mysql = new BancoDeDados();
$mysql -> conecta();

$login=$_POST['flogin'];
$senha=$_POST['fsenha'];

$sqlstr = "select * from tbusuario where login='$login' and senha='$senha'";
echo$sqlstr;

$resul = mysqli_query($mysql->con,$sqlstr);
$total = $resul->num_rows;

if($total==1){
              $dados = mysqli_fetch_array($resul);
              session_start();
              $_SESSION['Sid']=$dados['id'];
              $_SESSION['Slogin']=$dados['login'];
              $_SESSION['Snome']=$dados['nome'];
              $_SESSION['Snivel']=$dados['nivel'];
              $_SESSION['Slog']="ATIVO";
              
               echo"

               <script language='javascript' type='text/javascript'>
                       alert('você está logado!');
                       window.location.href='cadastro.php';
                  </script>

                  ";
}
else{

   echo"

          <script language='javascript' type='text/javascript'>
                  alert('SENHA OU LOGIN INVALIDO!!!');
                  window.location.href='naoentrou.php';
          </script>

          ";

}



$mysql->fechar();

?>
</BODY>
</HTML>
