<?php 
include("../../config.php");
if (isset($_SESSION['login']) == true) {
    header('Location: /Site-petshop-backend/');
    die();
}
?>

<head>
	<title>Painel de controle</title>
	<link href="<?php echo INCLUDE_PATH ?>/css/adm.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<div class="box-login">
		<?php
			if(isset($_COOKIE['lembrar'])){
				$user = $_COOKIE['user'];
				$password = $_COOKIE['password'];
				$sql = $db->prepare("SELECT * FROM `usuarios` WHERE login = ? AND senha = ?");
				$sql->execute(array($user,$password));
				if($sql->rowCount() == 1){
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
    				header('Location: /Site-petshop-backend/');
					die();
				}
			}

			if(isset($_POST['acao'])){
				$user = $_POST['user'];
				$password = $_POST['password'];
				$sql = $db->prepare("SELECT * FROM `usuarios` WHERE login = ? AND senha = ?");
				$sql->execute(array($user,$password));
				if($sql->rowCount() == 1){
					$info = $sql->fetch(); // Coleta os dados do usuario do banco e aramazena em info
					//Logamos com sucesso.
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
					$_SESSION['password'] = $password;
					$_SESSION['nome'] = $info['nome'];
					if(isset($_POST['lembrar'])){
						setcookie('lembrar',true,time()+(60*60*24),'/');
						setcookie('user',$user,time()+(60*60*24),'/');
						setcookie('password',$password,time()+(60*60*24),'/');
					}
					header('Location: /Site-petshop-backend/');
				}else{
					//Falhou
					echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário ou senha incorretos!</div>';
				}
			}
		?>
		<h2>Petshop</h2>
		<form method="post">
			<h3 style="margin-bottom:35px;" >Efetue o login</h3>
			<input type="text" name="user" placeholder="Login..." required>
			<input type="password" name="password" placeholder="Senha..." required>
			<div class="form-group-login alingcenter">
				<input type="submit" class="alingcenter" name="acao" value="Logar!">
			</div>
			<div class="form-group-login right">
				<label>Lembrar-me</label>
				<input type="checkbox" name="lembrar" />
			</div> 
            <div class="form-group-login right">
				<a href="cadastrar.php">Cadastrar usuário</a>
			</div>
			<div class="clear"></div>
		</form>
	</div><!--box-login-->