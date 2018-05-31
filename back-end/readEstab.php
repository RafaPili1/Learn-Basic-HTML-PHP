<?php
include ("connection.php");
//setando variaveis locais

$CNPJ = $_POST['CNPJ'];
	//ok agora vamos procurar no banco se ja existe uma consulta marcada nesse horario
$sql = "SELECT * FROM estabelecimento WHERE CNPJ=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s",$CNPJ);
$stmt->execute() or die("Erro 00");
$stmt->bind_result($id,$rs,$nf,$cnpj,$email,$end,$cidade,$estado,$tel,$date,$categoria,$status,$agencia,$conta);

while($stmt->fetch()) {
$Ras = $rs;
$Nof = $nf;
$CNP = $cnpj;
$emai = $email;
$adress = $end;
$city = $cidade;
$state = $estado;
$phone = $tel;
$data = $date;
$category = $categoria;
$estatus = $status;
$agency = $agencia;
$acc = $conta; 
}

$output = array(
	'resposta' => array(
		'rs'   => $Ras,
		'nf'   => $Nof,
		'cnpj' => $CNP,
		'email'=> $emai,
		'end'  => $adress,
		'cidade' => $city,
		'estado' => $state,
		'telefone' => $phone,
		'dataCadastro' => $data,
		'categoria' =>$category,
		'status'  => $estatus,
		'agencia' => $agency,
		'conta'  => $acc
	)

);
echo json_encode($output);
$con->close();
?>