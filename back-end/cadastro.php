<?php 

session_start();

include("connection.php");

$rs    = $_POST['razaos'];
$nf    = $_POST['nomef'];
$cnpj  = $_POST['cnpj'];
$email = $_POST['email'];
$end   = $_POST['adress'];
$cidade= $_POST['city'];
$estado= $_POST['state'];
$tel   = $_POST['tel'];
$date  = $_POST['dataCad'];
$categoria = $_POST['categoria'];
$status    = $_POST['status'];
$agcc      = $_POST['agenciacc'];
 
 //salvandando dados na cadeia

$sql = "INSERT INTO tabela-usuario (Rs,Nf,CNPJ,email,adress,city,state,tel,dateCard,Catogria,Status,agcc) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $con->prepare($sql);

$stmt->bind_param("sssssssssssss",$rs,$nf,$cnpj,$email,$end,$cidade,$estado,$tel,$date,$categoria,$status,$agcc);

//verificicando se houve resultset
if($stmt->execute()) {
	$con->close();
	$stmt->close();
	header('location:indexCadastro.php'); exit;
}

else {
	
	session_destroy();
	$con->close();
	header('location:logincadastro.php'); exit;
	
}

// ******************************** testado: OK! *********************************

?>