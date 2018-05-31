<?php 

include("connection.php");


$rs    = $_POST['razoes'];
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
$agencia      = $_POST['agenciacc'];
$conta      = $_POST['conta'];
 
 //salvandando dados na cadeia

$sql = "INSERT INTO estabelecimento (Rs,Nf,CNPJ,email,adress,city,state,tel,dateCad,Categoria,Status,agcc,conta) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("sssssssssssss",$rs,$nf,$cnpj,$email,$end,$cidade,$estado,$tel,$date,$categoria,$status,$agencia,$conta);

//verificicando se houve resultset
if($stmt->execute()) {
    header('location:../index.php');
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