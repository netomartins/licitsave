<!DOCTYPE html>
<!-- http://www.thiengo.com.br -->
<!-- Por: Vinícius Thiengo -->
<!-- Em: 02/12/2013 -->
<!-- Versão: 1.0 -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
	<head>
		<title>Enviar arquivo para o servidor sem carregamento de página by Thiengo [Calopsita]</title>
	</head>
	
	
	
	<body>
		
		<form id="form">
			
			<!-- IMAGEM EM AMOSTRA -->
			<img id="img" src="default.png" width="200" height="200" />
			<br /><br />
			
			<!-- IMAGEM EM AMOSTRA -->
			<input type="file" id="file-input" name="file-input" />
			<br /><br />
			
			<!-- BOTÃO DE ENVIO -->
			<button type="submit">Enviar formulário</button>
		</form>
		
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
		<script src="http://malsup.github.com/jquery.form.js"></script>
		<script>
			$('#file-input').change(function() {
			
				$('#form').ajaxForm({
					url: 'multiple-upload-ajax.php',
					type: 'post',
					success: function(data){
						$('#img').attr('src', data);
					}
				}).submit();
				
			}); 
		</script> 
	</body>
</html>