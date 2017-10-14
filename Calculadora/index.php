<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<style type="text/css">
		.auto-style1 {
			margin-left: 116px;
			margin-top: 20px;
		}
		.auto-style2 {
			margin-left: 127px
		}
		.auto-style3 {
			margin-left: 127px;
		}
		</style>
	</head>
	<body>
		<div style="background-color:#5CE8CE;margin-left:500px; width:400px">
			<form action="resultado.php" method="post">
				<select name="operador" class="auto-style1" style="width: 169px">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicacion</option>
				<option value="division">Division</option>
				</select><br />
				<p style="color:whide; text-aling:center">Primer valor:</p>
				<input type="text" name="Primer valor" class="auto-style2"><br>
				<p style="color:whide; text-aling:center">Segundo valor:</p>
				<input type="text" name="Segundo valor" class="auto-style2"><br>
				<br>
				<input type="submit" value="calcular" class="auto-style3"><br>
			</form>
		</div>
		<font face="times new roman" color="#2531FF" size="2">
	<i><u><p ALIGN="RIGHT">Diseñado por: Tovar Jiménez José Mario</p></i></u>
	</font>
	</body>
</html>
