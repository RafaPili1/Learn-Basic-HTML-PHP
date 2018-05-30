$(document).ready(function(){
	// validador de CNPJ 
	function validarCNPJ(cnpj){
		cnpj = cnpj.replace(/[^\d]+/g,'');
 
	    if(cnpj == '') return false;
	     
	    if (cnpj.length != 14)
	        return false;
	 
	    // Elimina CNPJs invalidos conhecidos
	    if (cnpj == "00000000000000" || 
	        cnpj == "11111111111111" || 
	        cnpj == "22222222222222" || 
	        cnpj == "33333333333333" || 
	        cnpj == "44444444444444" || 
	        cnpj == "55555555555555" || 
	        cnpj == "66666666666666" || 
	        cnpj == "77777777777777" || 
	        cnpj == "88888888888888" || 
	        cnpj == "99999999999999")
	        return false;
	         
	    // Valida DVs
	    tamanho = cnpj.length - 2
	    numeros = cnpj.substring(0,tamanho);
	    digitos = cnpj.substring(tamanho);
	    soma = 0;
	    pos = tamanho - 7;
	    for (i = tamanho; i >= 1; i--) {
	      soma += numeros.charAt(tamanho - i) * pos--;
	      if (pos < 2)
	            pos = 9;
	    }
	    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	    if (resultado != digitos.charAt(0))
	        return false;
	         
	    tamanho = tamanho + 1;
	    numeros = cnpj.substring(0,tamanho);
	    soma = 0;
	    pos = tamanho - 7;
	    for (i = tamanho; i >= 1; i--) {
	      soma += numeros.charAt(tamanho - i) * pos--;
	      if (pos < 2)
	            pos = 9;
	    }
	    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	    if (resultado != digitos.charAt(1))
	          return false;
	           
	    return true;
	}

	function verificaMercado() {
		var controle = false;
		var cat   = $('#categoria').val();
		var phone = $('#phone').val();
		console.log(phone.length);
		console.log(cat);
		
		if(cat=="Supermercado"){
			console.log("OK!");
			controle = true;
		}
		else {
			console.log("Não é mercado");
		}

		if(phone.length == 0 && controle){
			$('#telefone').append("<div id='phoneError'>Você deve preencher o telefone</div>");
			return false;
		}
		else {
			$('#phoneError').remove();
			return true;
		}


	}

	//controlador do evento de submissão do form de cadastros
	$('#form').submit(function(e){
		console.log("Submissão")
		console.log(verificaMercado());
		console.log(validarCNPJ($('#cnpj').val()));
		if(verificaMercado() && validarCNPJ($('#cnpj').val())){
			alert("Cadastado com sucesso!")
			return true;
		}
		else return false;
	});
});