$(document).ready(function() {
	$('#butt').click(function(){
		var cnp = $("#CNPJread").val();

		$.post("back-end/readEstab.php",
			{CNPJ : cnp},
			function(data){
				console.log("OK");
				data = JSON.parse(data);
				console.log(data);
				$('#replace').remove();
				$("#inside").append("<div id='replace'><div>"+data.resposta.rs+"</div><div>"+data.resposta.nf+"</div><div>"+data.resposta.cnpj+"</div><div>"+data.resposta.email+"</div><div>"+data.resposta.end+"</div><div>"+data.resposta.cidade+"</div><div>"+data.resposta.estado+"</div><div>"+data.resposta.telefone+"</div><div>"+data.resposta.dataCadastro+"</div><div"+data.resposta.categoria+"</div><div>"+data.resposta.status+"</div><div>"+data.resposta.agencia+"</div><div>"+data.resposta.conta+"</div></div>");
			}, 'JSON');	
	});

	$('#formTres').submit(function(e){
		return false;
	});
});