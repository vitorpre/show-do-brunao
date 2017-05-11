

function selecionarAlternativa(elementAlernativaSelecionada)
{
	var alternativaSelecionada = $(elementAlernativaSelecionada).data("alternativa");

	$("#alternativaSelecionada").val(alternativaSelecionada);

	estilizarAlternativaSelecionada(elementAlernativaSelecionada);
}

function estilizarAlternativaSelecionada(elementAlernativaSelecionada)
{
	$(".resposta").removeClass("resposta-selecionada");

	$(elementAlernativaSelecionada).addClass("resposta-selecionada");
}

function validarAlternativaSelecionada()
{
	var retorno = true;

	var alternativaSelecionada = $("#alternativaSelecionada").val();

	if ($.inArray( alternativaSelecionada, [ "A", "B", "C", "D", "E" ] ) < 0)
	{
		retorno = false;
	}

	return retorno;

}

$(document).ready(function(){


	$(".resposta").on("click", function(){

		selecionarAlternativa(this);

	});

	$("#botaoResponder").on("click", function(){

		

		
		if(!validarAlternativaSelecionada())
		{
			alert("Selecione uma alternativa");
			return;

		}

		$('#modalConfirmacao').modal('show');

	});

	$("#enviarFormulario").on("click", function(){

		if(!validarAlternativaSelecionada())
		{
			alert("Selecione uma alternativa");
			return;

		}

		$("#enviarResposta").submit();

	});

        var easter_egg = new Konami(function() { $('#modalEasterEgg').modal('show');});

	


});