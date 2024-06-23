<HTML>
<HEAD>
 <TITLE>site_personalizavel</TITLE>
</HEAD>
<BODY>
<center>
      <h1>Personalização de pagina:</h1>
      
      <form name="form" action="tl_usuario.php" method="post">
            <legend>form</legend>
            <label>Nome de usuario:</label><br>
            <input type="text" size="30" name="nome" value="" placeholder="pedrinho_matador_de_porco"><br><br>
            
            <label>conteudo da sua pagina:</label><br>
            <textarea name="conteudo" cols="50" rows="5">
            
            </textarea><br><br>
            
            <label>cor de fundo:</label><br>
            <select name="bgcor">
                    <option value="#FFD966">verao</option>
                    <option value="#FFBF9B">outono</option>
                    <option value="#85CDFD">inverno</option>
                    <option value="#FDF7C3">primavera</option>
            </select><br><br>
            
            <label>cor do texto:</label><br>
            <select name="textcor">
                    <option value="#1c1314">preto</option>
                    <option value="#231f73">azul</option>
            </select><br><br>
            
            <label>imagem de fundo:</label><br>
            <select name="pfimg">
                    <option value="img/paisagem1.jpg">paisagem 1</option>
                    <option value="img/paisagem2.jpg">paisagem 2</option>
                    <option value="img/paisagem3.jpg">paisagem 3</option>
            </select><br><br>
            
            
            
            
            <input name="submit" value="finalizar" type="submit">
      
      </form>
</center>
<?php

?>
</BODY>
</HTML>
