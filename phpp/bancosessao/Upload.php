<!-- Professora C�lia Regina Bueno Figueira
  Etec de Po�
 salvar como Upload.php -->
<?php
// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
$arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
$nome = $_FILES[ 'arquivo' ][ 'name' ];

$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

$extensao = strtolower ( $extensao );

if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

$novoNome = uniqid ( time () ) .".". $extensao;
//$novoNome = uniqid ( time () ) . $extensao;
 $destino = 'imagens / ' . $novoNome;
if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ){
//if (move_uploaded_file ( $arquivo_tmp, $destino ) ){
echo"salvo na pasta \n\n";
echo '<center><img src = "' . $destino . '" height=400 width=790/></center>';}
else
 echo utf8_encode('Erro ao salvar o arquivo. Aparentemente voc� n�o tem permiss�o  de escrita.<br />');}
else
 echo utf8_encode("Voc� poder� enviar apenas arquivos *.jpg;*.jpeg;*.gif;*.png <br />");}

else
 echo utf8_encode('Voc� n�o enviou nenhum arquivo!');

 echo"<script language='javascript' type='text/javascript'>
          alert('voltando para o cadastro');window.location.href='cadastro.php';
          </script>";
 
?>

