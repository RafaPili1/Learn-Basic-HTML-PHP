<!DOCTYPE html>
<html>
<head>
	<title>FIT-CARD cadastre seu estabelecimento!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Quero cadastrar meu estabelecimento</h1>
				<p>Siga os passos do forms!</p>
				<div class="row">
					<div class="col-sm-8">
						<form action="back-end/cadastro.php" method="POST" id="form">
							<div class="form-group" id="Rs">
							
								<label for="razoes">
									Insira sua razão social:
								</label>
							
								<input type="text" 
									name="razoes" id="razoes" class="form-control" required>
							
							</div>
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


</html>