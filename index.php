<!DOCTYPE html>
<html>
<head>
	<title>FIT-CARD cadastre seu estabelecimento!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript" /></script>
	<script type="text/javascript">
		$(document).ready(function() {	
			$("#cnpj").mask("99.999.999/9999-99");
			$("#cnpjAntigo").mask("99.999.999/9999-99");
			$("#remocao").mask("99.999.999/9999-99");
			$("#CNPJread").mask("99.999.999/9999-99");
			$("#dataCadastro").mask("99/99/9999");
			$("#agenciacc").mask("999-9");
			$("#conta").mask("99.999-9");
			}
		);
	</script>
	<script src="js/readData.js" type="text/javascript"></script>
	<script src="js/submission.js" type="text/javascript"></script>

</head>

<body>
	<div class="head">
		<div class="container">
			<div class="page-header">
				<h1>FitCard</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Quero cadastrar meu estabelecimento</h1>
				<h4>Preencha os seus dados nos campos abaixo :)</h4>
				<div class="row">
					<div class="col-sm-6">
						<form action="back-end/cadastro.php" method="POST" id="form">
							<div class="form-group" id="Rs">
							
								<label for="razoes">
									Insira a razão social da empresa:
								</label>
							
								<input type="text" 
									name="razoes" id="razoes" class="form-control" required>
							
							</div>
							<div class="form-group" id="Nf">
							
								<label for="nomef">
									Insira o nome fantasia da empresa:
								</label>
							
								<input type="text" 
									name="nomef" id="nomef" class="form-control" required>
							
							</div>
							<div class="form-group" id="cnpfj">
							
								<label for="cnpfj">
									Insira o CNPJ da empresa:
								</label>
							
								<input type="text" 
									name="cnpj" id="cnpj" class="form-control">
							
							</div>
							<div class="form-group" id="emailAdress">
							
								<label for="emailAdress">
									Insira o email da empresa:
								</label>
							
								<input type="text" 
									name="email" id="email" class="form-control">
							
							</div>
							<div class="form-group" id="endereco">
							
								<label for="endereco">
									Insira o endereço da empresa:
								</label>
							
								<input type="text" 
									name="adress" id="adress" class="form-control">
							</div>
							<div class="form-group" id="cidade">
							
								<label for="cidade">
									Insira a cidade da empresa:
								</label>
							
								<input type="text" 
									name="city" id="city" class="form-control">
							</div>
							<div class="form-group" id="estado">
								<label for="estado">
									Selecione um estado:
								</label>
								<select name="state">
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
							<div class="form-group" id="telefone">
							
								<label for="telefone">
									Insira o telefone da empresa:
								</label>

								<input type="text" name="tel" class="form-control" id="phone">
							
							</div>
							<div class="form-group" id="data">
							
								<label for="data">
									Escreva a data do seu cadastro:
								</label>
							
								<input type="text" 
									name="dataCad" id="dataCadastro" class="form-control">
							
							</div>
							<div class="form-group" id="catagory">
								<label for="category">
									Selecione a categoria de sua empresa:
								</label>
								<select name="categoria" id="categoria">
									<option value="Supermercado">Supermercado</option>
									<option value="Restaurante">Restaurante</option>
									<option value="Borracharia">Borracharia</option>
									<option value="Posto">Posto</option>
									<option value="Oficina">Oficina</option>
									<option value="Outros">Outros</option>
								</select>
							</div>
							<div class="form-group" id="estatus">
								<label for="estatus">
									Selecione o status da empresa:
								</label>
								<select name="status">
									<option value="Ativo">Ativo</option>
									<option value="Inativo">Inativo</option>
								</select>
							</div>
							<div class="form-group" id="agcconta">
								<label for="agcconta"> 
									Escreva a agência e conta de sua empresa:
								</label>
								<div class="row">
									<div class="col-sm-4">
											<br/>
										Escreva sua agência: 
										<input type="text" name="agenciacc" id="agenciacc" class="form-control">
									</div>
									<div class="col-sm-6">
											<br/>
										Escreva sua conta: 
										<input type="text" name="conta" id="conta" class="form-control">
									</div>
								</div>
							</div>
							<br/>
							<button type="submit" class="btn btn-default"> Pronto </button>
						</form>
						<br/>
					</div>
					<div class="col-sm-6">
						<form action="back-end/atualizacao.php" method="POST" id="formUm">
							<h3>Desejo atualizar meu cadastro</h3>
							<div class="form-group" id="cnp" required>
								<label for="cnp">
									Informe seu CNPJ:
								</label>
								<input type="text" name="cnpjAntigo" class="form-control" id="cnpjAntigo">
							</div>
							<div class="form-group" id="selCadastro">
								<label for="selCadastro">
									Selecione o campo que deseja atualizar:
								</label>
								<select name="campo">
									<option value="email">Email</option>
									<option value="adress">Endereço</option>
									<option value="city">Cidade</option>
									<option value="state">Estado</option>
									<option value="tel">Telefone</option>
									<option value="Status">Status</option>
								</select>
							</div>
							<div class="form-group" id="atualizarCad">
								<label for="atualizarCad">
									Escreva aqui o novo campo:
								</label>
								<input type="text" name="dado" class="form-control" required>
								<br />
								<button type="submit" class="btn btn-default"> Alterar </button>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class='rodape'>
		<div class='container'>
			<div class="row">
				<div class="col-sm-6">
					<form action="back-end/destruir.php" method="POST" id="formDois">
							
						<h3>
							Informe seu CNPJ se deseja remover seu cadastro:
						</h3>
							
						<input type="text" name="CNPJdestruir" class="form-control" id="remocao">
						<br />
						<button type="submit" class="btn btn-default"> Remover </button>
						<br />
						<br />
						</form>
				</div>
				<div class="col-sm-6">
					<form action="" method="POST" id="formTres">
						<h3>
							Insira seu CNPJ se deseja ver seus dados salvos:
						</h3>

						<input type="text" name="" id="CNPJread" class="form-control">
						<br />
						<button type="submit" class="btn btn-default" id="butt"> Ver dados </button>
						<br />
						<div id="inside"></div>
					</form>
				</div>
			</div>
		</div>
			Autoria de: Rafael Cabral Pili
	</div>
</body>


</html>