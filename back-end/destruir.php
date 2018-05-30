
<?php  
	//conectando ao db
include ("connection.php");
	//setando variaveis locais

$CNPJ = $_POST['CNPJdestruir'];
	//ok agora vamos procurar no banco se ja existe uma consulta marcada nesse horario
$sql = "DELETE from estabelecimento WHERE CNPJ=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s",$CNPJ);
$stmt->execute();
$con->close();

?>