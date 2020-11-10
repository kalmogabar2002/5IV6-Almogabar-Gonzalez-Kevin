
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="CSS/Style.css">
	    <title>Cifrado Cesar</title>
	</head>
	<body>
		<h1 align="center">Cifrado César</h1>	
		
		<div class="caja">
			<div class="caja2">
			
			<label>No. coeficiente de Desplazamiento:  <input id="desplazamiento" type="number" max="26" min="1"></input> </label></br>
			
		    </br>
			<label>Introdusca el texto a Cifrar:</label></br></br>
			<textarea id="cadena" ></textarea>
			
	
			<p class="boton"> 
				<input type="button"  value="Cifrar" onclick="codificar()" >
				<input type="button" id="boton1" value="Decifrar" onclick="decodificar()" > 
			</p>
			
			<div id="texto">
				<p id="resultado"></p>
			</div>
			
			
			
			<script src="js/JS_Cesar.js" ></script>

		</div>
		</div>
	</body>
</html>