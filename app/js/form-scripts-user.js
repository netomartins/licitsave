

$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Preencha todos os campos!");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
	$('#gif').css('visibility', 'visible');
	$('#gif').css('width', '20px');
	$('#seta_btnenviar').css('visibility', 'hidden');
	$('#seta_btnenviar').css('font-size', '0px');
    // Initiate Variables With Form Content
    var nome = $("#nome").val();
    var email = $("#email").val();
    var senha = $("#senha").val();
    
	/**
	var modelo = $("#modelo").val();
	var capacidade = $("#capacidade").val();
	var cor = $("#cor").val();
	var local = $("#local").val();
	var hora = $("#hora").val();
	var emailto = $("#emailto").val();
	var idapple = $("#idapple").val();
	var linkpagina = $("#linkpagina").val();
	var track = $("#track").val();
	var linguagem = $("#linguagem").val();
	var linguagem_gift = $("#linguagem_gift").val();
	var template = $("#template").val();
	**/

	

    $.ajax({
        type: "POST",
        url: "php/form-process-user.php",
        data: "nome=" + nome + "&email=" + email + "&senha=" + senha,
        success : function(text){
			tmp=text.split('|');
			//console.log('success');
			console.log(text);
			$('#gif').css('visibility', 'hidden');
			$('#gif').css('width', '0px');
			$('#seta_btnenviar').css('visibility', 'visible');
			$('#seta_btnenviar').css('font-size', 'inherit');
            if (tmp[0] == "success"){
                formSuccess();
				$("#myModal").modal();
				window.location.reload();
				//submitMSG(true, tmp[1]);
				//$("#contador").text(tmp[1]);
            } else {
                //formSuccess();
				//asd
				$("#msgSubmit").text(text);
            }
        }
		
    });
	
	//var request = $.ajax({
	//
	//url: "php/form-process.php",
    //type: "POST",
    //data: "imagem=" + imagem + "&modelo=" + modelo + "&capacidade=" + capacidade + "&cor=" + cor + "&local=" + local + "&hora=" + hora + "&emailto=" + emailto + "&idapple=" + idapple + "&linkpagina=" + linkpagina + "&track=" + track,
    //dataType: "html"
	//
	//});
	//
	//request.done(function(text) {
    //tmp=text.split('|');
	//console.log(text)
	//$('#gif').css('visibility', 'hidden');
	//$('#gif').css('width', '0px');
	//$('#seta_btnenviar').css('visibility', 'visible');
	//$('#seta_btnenviar').css('font-size', '14px');
	//if (tmp[0] == "success"){
	//		formSuccess();
	//		//submitMSG(true, tmp[1]);
	//		$("#contador").text(tmp[1]);
	//	} else {
	//		formSuccess();
	//	}
	//});
	//
	//request.fail(function(jqXHR, text) {
    //formError();
    //submitMSG(false,text);
	//});

}

function formSuccess(){
    $("#contactForm")[0].reset();
    //submitMSG(true, "Mensagem Enviada :)");
}

function formError(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Erro ao enviar mensagem!");
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
	
}