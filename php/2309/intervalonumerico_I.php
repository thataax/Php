<HTML>
<HEAD>
 <TITLE>tela1</TITLE>
</HEAD>
<BODY bgcolor="yellow">
<?php
     echo"<H1>MOSTRANDO OS NUMEROS PARES DE 1 A 50:</H1>";
     for ($x = 1; $x <= 50; $x++){
         if ($x % 2 == 0){
            echo"<h2>$x</h2>";
         }
     }
     echo"<hr>";
     echo"<h1>Ampliacao do exercicio: Intervalo escolhido pelo usuario</h1>";
     // variaveis
     $p_v1 = $_POST["f_v1"];
     $p_v2 = $_POST["f_v2"];
     $p_tipo = $_POST["f_tipo"];
     
     
     //codigos
     if ($p_v1 > $p_v2){
        $troca = $p_v1;
        $p_v1 = $p_v2;     // A variavel troca faz a troca entre o v1 e o v2
        $p_v2 = $troca;
     }
	 
	 for ($x = $p_v1; $x <= $p_v2; $x++){
		if ($x % 2 == 0){
			echo"<h2>$x</h2>";
		}
	}
     echo"<hr>";
	 echo"<h1>Ampliacao do exercicio: Intervalo escolhido, bem como o seu tipo(par,impar, ou ambos)</h1>";
	 
     switch($p_tipo){
                     case "P":
						echo"<h2>Apenas os pares:</h2>";
						for ($x = $p_v1; $x <= $p_v2; $x++){
							if ($x % 2 == 0){
								echo"<h2>$x</h2>";
							}
						}
						break;
					case "I":
						echo"<h2>Apenas os impares:</h2>";
						for ($x = $p_v1; $x <= $p_v2; $x++){
							if ($x % 2 == 1){
								echo"<h2>$x</h2>";
							}
						}
						break;
					case "amogus":
						echo"
							⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣤⣤⣤⣀⣀⣀⣀⡀⠀⠀⠀⠀⠀⠀⠀<br>
							⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⠟⠉⠉⠉⠉⠉⠉⠉⠙⠻⢶⣄⠀⠀⠀⠀⠀<br>
							⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⡏⠀⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⠙⣷⡀⠀⠀⠀<br>
							⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⡟⠀⣠⣶⠛⠛⠛⠛⠛⠛⠳⣦⡀⠀⠘⣿⡄⠀⠀<br>
							⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⠁⠀⢹⣿⣦⣀⣀⣀⣀⣀⣠⣼⡇⠀⠀⠸⣷⠀⠀<br>
							⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⡏⠀⠀⠀⠉⠛⠿⠿⠿⠿⠛⠋⠁⠀⠀⠀⠀⣿⡄⣠<br>
							⠀⠀⢀⣀⣀⣀⠀⠀⢠⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⡇⠀<br>
							⠿⠿⠟⠛⠛⠉⠀⠀⣸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀<br>
							⠀⠀⠀⠀⠀⠀⠀⠀⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣧⠀<br>
							⠀⠀⠀⠀⠀⠀⠀⢸⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣿⠀<br>
							⠀⠀⠀⠀⠀⠀⠀⣾⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠀<br>
							⠀⠀⠀⠀⠀⠀⠀⣿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠀<br>
							⠀⠀⠀⠀⠀⠀⢰⣿⠀⠀⠀⠀⣠⡶⠶⠿⠿⠿⠿⢷⣦⠀⠀⠀⠀⠀⠀⠀⣿⠀<br>
							⠀⠀⣀⣀⣀⠀⣸⡇⠀⠀⠀⠀⣿⡀⠀⠀⠀⠀⠀⠀⣿⡇⠀⠀⠀⠀⠀⠀⣿⠀<br>
							⣠⡿⠛⠛⠛⠛⠻⠀⠀⠀⠀⠀⢸⣇⠀⠀⠀⠀⠀⠀⣿⠇⠀⠀⠀⠀⠀⠀⣿⠀<br>
							⢻⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⡟⠀⠀⢀⣤⣤⣴⣿⠀⠀⠀⠀⠀⠀⠀⣿⠀<br>
							⠈⠙⢷⣶⣦⣤⣤⣤⣴⣶⣾⠿⠛⠁⢀⣶⡟⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡟⠀<br>
							⢷⣶⣤⣀⠉⠉⠉⠉⠉⠄⠀⠀⠀⠀⠈⣿⣆⡀⠀⠀⠀⠀⠀⠀⢀⣠⣴⡾⠃⠀<br>
							⠀⠈⠉⠛⠿⣶⣦⣄⣀⠀⠀⠀⠀⠀⠀⠈⠛⠻⢿⣿⣾⣿⡿⠿⠟⠋⠁⠀⠀⠀<br>
						";
						break;
					default:
						echo"<h2>todos os numeros:</h2>";
						for ($x = $p_v1; $x <= $p_v2; $x++){
								echo"<h2>$x</h2>";
						}
     }

?>
</BODY>
</HTML>
