<?php
function conexion(){

	$servidor="localhost";
	$usuario="root"
	$clave="";
	$base="carrito1";
	$conectar= mysqli_connect($servidor,$usuario,$clave,$base) or die("Error de conexion");
	return $conectar;
}
function ingresar($usu,$clave){
	$conectar=conexion();
	$query="select * from clientes where cli_cedula='$usu' and cli_clave'$clave' ";
	$enviar = mysqli_query($conectar,$query);
	$ver = mysqli_num_rows($enviar);
	return $ver;
}
function resgistro($a,$b,$c,$d,$e){
$conectar=conexion();
$query="insert into clientes values(0,$a,$b,$c,$d,$e)";
$enviar=mysqli_query($conectar,$query);
return $enviar;
}

?>