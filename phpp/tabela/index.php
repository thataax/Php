<HTML>
<HEAD>
 <TITLE>tabela</TITLE>
</HEAD>
<BODY>

<center><font color="blue" size="6">Tabela</font></center>
<br>
<!--
	sintaxe:
	
	table: chave que cria tabela
	
		L>	tr: linha da tabela
			L>	td: célula da tabela
	
	exemplo:
	
	                                   
		+----------+---------+							   
	  tr|	td	   |	td	 |		  
		+----------+---------+		  
	  tr|	td	   |	td	 |		  
		+----------+---------+							  
									  




-->
<table border="1"><!-- inicio da tabela -->
	<tr>			<!-- 1a linha -->
		<td>agua</td>
		<td>farinha</td>
		<td>fermento</td>
	</tr>
		<tr>			<!-- 2a linha -->
		<td>2</td>
		<td>3</td>
		<td>2</td>
	</tr>
		<tr>			<!-- 3a linha -->
		<td>copos</td>
		<td>copos</td>
		<td>colheres de cha</td>
	</tr>
</table>
<hr>
<table border="2"> <!-- inicio da tabela -->
	<tr>
		<td width="100">width = 100</td>
		<td align="middle" width="200"> width = 200</td>
	</tr>
</table>
<hr>
<table border="2"> <!-- inicio da tabela -->
	<tr>
		<td width="25%">width = 25%</td>
		<td align="middle" width="75%"> width = 75%</td>
	</tr>
</table>
<hr>
<table border="0"> <!-- inicio da tabela -->
	<tr>
		<td width="150" height="40" bgcolor="red">vermelho</td>
		<td width="150" bgcolor="blue">azul</td>
		<td width="150" bgcolor="red">lima</td>
	</tr>
	<tr>
		<td width="300" bgcolor="blue">rosa</td>
		<td width="150" bgcolor="red">laranja</td>
		<td width="200" bgcolor="blue">ciano</td>
	</tr>
</table>
<hr>
<table border="2"> <!-- inicio da tabela -->
	<tr>
		<td align="middle" width="200" height="100"> uma celula</td>
	</tr>
	<tr>
		<td width="100">duas celulas</td>
		<td width="100">duas celulas</td>
	</tr>
</table>
<hr>
<table border="0" cellspacing="0" cellpadding="1"> <!-- inicio da tabela -->
	<tr>
		<td width="300" bgcolor="blue">rosa</td>
		<td width="150" bgcolor="red">laranja</td>
		<td width="200" bgcolor="blue">ciano</td>
	</tr>
	<tr>
		<td width="150" height="40" bgcolor="red">vermelho</td>
		<td width="150" bgcolor="blue">azul</td>
		<td width="150" bgcolor="red">lima</td>
	</tr>
</table>
<hr>
<table border="2" cellspacing="2" cellpadding="4"> <!-- inicio da tabela -->
	<tr>
		<th>conteudo em negrito</th>
	</tr>
	<tr>
		<th>conteudo em negrito</th>
	</tr>
</table>
<hr>
<table border="2" cellpadding="2"> <!-- inicio da tabela -->
	<tr>
		<td colspan="2"> exemplo de uso de colspan</td>
	</tr>
	<tr>
		<td> celula</td>
		<td> celula</td>
	</tr>
</table>
<hr>
<table border="5" > <!-- inicio da tabela -->
	<tr>
		<td><img src="img/popeye.jpg"></td>
	</tr>
</table>
<hr>
<table border="5" background="img/popeye.gif" cellpadding="100"> <!-- inicio da tabela -->
	<tr>
		<th>conteudo em negrito</th>
	</tr>
</table>
<hr><br><br>
<!--######################################-->
<table border="1" rules="all"><!-- inicio da tabela -->
	<tr>			<!-- 1a linha -->
		<td>agua</td>
		<td>farinha</td>
		<td>fermento</td>
	</tr>
		<tr>			<!-- 2a linha -->
		<td>2</td>
		<td>3</td>
		<td>2</td>
	</tr>
		<tr>			<!-- 3a linha -->
		<td>copos</td>
		<td>copos</td>
		<td>colheres de cha</td>
	</tr>
</table>
<!--######################################-->
<hr>
<!--######################################-->
<table border="1" rules="none"><!-- inicio da tabela -->
	<tr>			<!-- 1a linha -->
		<td>agua</td>
		<td>farinha</td>
		<td>fermento</td>
	</tr>
		<tr>			<!-- 2a linha -->
		<td>2</td>
		<td>3</td>
		<td>2</td>
	</tr>
		<tr>			<!-- 3a linha -->
		<td>copos</td>
		<td>copos</td>
		<td>colheres de cha</td>
	</tr>
</table>
<!--######################################-->
<hr>
<!--######################################-->
<table border="1" rules="rows"><!-- inicio da tabela -->
	<tr>			<!-- 1a linha -->
		<td>agua</td>
		<td>farinha</td>
		<td>fermento</td>
	</tr>
		<tr>			<!-- 2a linha -->
		<td>2</td>
		<td>3</td>
		<td>2</td>
	</tr>
		<tr>			<!-- 3a linha -->
		<td>copos</td>
		<td>copos</td>
		<td>colheres de cha</td>
	</tr>
</table>
<!--######################################-->
<hr>
<!--######################################-->
<table border="1" rules="cols"><!-- inicio da tabela -->
	<tr>			<!-- 1a linha -->
		<td>agua</td>
		<td>farinha</td>
		<td>fermento</td>
	</tr>
		<tr>			<!-- 2a linha -->
		<td>2</td>
		<td>3</td>
		<td>2</td>
	</tr>
		<tr>			<!-- 3a linha -->
		<td>copos</td>
		<td>copos</td>
		<td>colheres de cha</td>
	</tr>
</table>
<!--######################################-->
<hr>
</BODY>
</HTML>
