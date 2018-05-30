<?php 

session_start();

include("connection.php");

$cnpj  = $_POST["cnpjAntigo"];
$campo = $_POST["campo"];
$novoTexto = $_POST["dado"];
 
 //salvandando dados na cadeia

$sql = "UPDATE estabelecimento SET '$campo'=? WHERE CNPJ='$cnpj'";
$stmt = $con->prepare($sql);

$stmt->bind_param("s",$novoTexto);

//verificicando se houve resultset
if($stmt->execute()) {
	$con->close();
	$stmt->close();
	exit;
}

else {
	
	session_destroy();
	$con->close();
	exit;
}

// ******************************** testado: OK! *********************************

?>