<?php
include("funciones.php");
session_start();
$conect=conexion();

if (isset($_POST['enviar'])) {
	$usuario=$_POST['usuario1'];
	$clave=$_POST['clave1']
	$validar= ingresar($usuario,$clave);
	  if ($validar>0) {
	  	$_SESSION['usuario']= $usuario;
	  	$query="select * from clientes where cli_cedula='$usuario' and cli_clave'";
	  	$enviarC=mysql_query($conect,$query);
	  	$ver = mysqli_fetch_array($enviarC);
	  	$_SESSION['id']=$ver['cli_id'];
	  	$_SESSION['nombre']=$ver['cli_nombre'];
	  	header('location:pagina.php');
	  }else{
	  	echo '<<script> alert("Error"); </script>';
	  }
	// code...
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Formulario</legend>
			<label>Ingrese su cedula</label>
			<input type="text" placeholder="Ingresa su cedula" name="usuario1"><br>
			<label>Ingrese la contraseña</label>
			<input type="tex" placeholder="Ingrese su contraseña" name="clave1"><br>
			<input type="submit" name="enviar">
		</fieldset>
	</form>

</body>
</html>