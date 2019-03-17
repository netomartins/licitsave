<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		$data_inicial = date('Y/m/d');
		$data_final = date('Y/m/d', strtotime('+' . $resultado['dias'] . ' days', strtotime($resultado['created'])));
		
		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);
		
		$diferenca = $time_final - $time_inicial;
		$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias
		
		
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			
			if($dias > 0){
			
			$_SESSION['logged_in'] = true;
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			$_SESSION['data'] = $resultado['created'];
			$_SESSION['diasContratados'] = $resultado['dias'];
			$_SESSION['contador'] = $resultado['envios'];
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: administrativo.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: app/");
			}else{
				header("Location: cliente.php");
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
			}else{	
			//Váriavel global recebendo a mensagem de erro
			//$_SESSION['loginErro'] = "Seus Créditos ACABARAM!";
			//header("Location: index.php");
		}
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: index.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	
	}
	else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
	
	
?>