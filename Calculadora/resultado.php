<?php
	if ($_POST ["Primer valor"] !="" and $_POST ["Segundo valor"]!="")
	{
		if ($_POST["operador"] == "suma")
		{
			echo 'El resultado de la Suma es: <br>';
			echo $resultado = $_POST ["Primer valor"] + $_POST ["Segundo valor"];
			echo '<br /><a href="index.php">Volver</a>';
		}
		elseif ($_POST["operador"] == "resta")
		{
				echo 'El resultado de la Resta es: <br>';
				echo $resultado = $_POST ["Primer valor"] - $_POST ["Segundo valor"];
				echo '<br /><a href="index.php">Volver</a>';
		}
		elseif ($_POST["operador"] == "multiplicacion")
		{
				print('El resultado de la Multiplicación es: <br>');
				print($resultado = $_POST ["Primer valor"] * $_POST["Segundo valor"]);
				print('<br /><a href="index.php">Volver</a>');
		}
		elseif ($_POST["operador"] == "division")
		{
				print('El resultado de la División es: <br>');
				print($resultado = $_POST ["Primer valor"] / $_POST["Segundo valor"]);
				print('<br /><a href="index.php">Volver</a>');
		}
	}
	else
	{
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="index.php">Volver</a>');
	}
		