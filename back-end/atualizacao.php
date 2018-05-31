<?php 

include("connection.php");

$cnpj  = $_POST["cnpjAntigo"];
$campo = $_POST["campo"];
$novoTexto = $_POST["dado"];
 
 //salvandando dados na cadeia


if($campo == 'tel')    $sql = "UPDATE estabelecimento SET tel=? WHERE CNPJ=?";
if($campo == 'adress') $sql = "UPDATE estabelecimento SET adress=? WHERE CNPJ=?";
if($campo == 'city')   $sql = "UPDATE estabelecimento SET city=? WHERE CNPJ=?";
if($campo == 'state')  $sql = "UPDATE estabelecimento SET state=? WHERE CNPJ=?";
if($campo == 'status') $sql = "UPDATE estabelecimento SET status=? WHERE CNPJ=?";

$stmt = $con->prepare($sql);

$stmt->bind_param("ss",$novoTexto,$cnpj);

//verificicando se houve resultset
if($stmt->execute()) {
	$con->close();
	$stmt->close();
	header('location:../index.php');
	exit;
}

else {
	
	session_destroy();
	$con->close();
	exit;
}

// ******************************** testado: OK! *********************************

?>