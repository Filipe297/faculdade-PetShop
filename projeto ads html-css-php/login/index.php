<?php 
include("/php/config.php");
if (isset($_SESSION['login']) == true) {
    header('Location: /Site-petshop-backend/');
    die();
}
?>
<head>
  <title>formulario</title>

<style>
   *{margin: 0;padding: 0;box-sizing: border-box;}
   body{
       background-color: rgb(0, 163, 180);
   }
   form{
      background-color: white;
      max-width: 500px;
      padding: 20px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
   }
   form h3{
     text-align: center;
     color:rgb(255, 143, 26);
     font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
   }
   form input[type=text],
   form input[type=password]{
    width: 100%;
    height: 45px;
    border: 1px solid #ccc;
    padding-left: 10px;
    margin: 10px 0;

   }
   form input[type=submit]{
    width: 100%;
    height: 30px;
    cursor: pointer;
    background:rgb(255, 143, 26);
    color: white;
    border: 0;
    border-radius: 20px;

   }
</style>

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
				$password = $_POST['senha'];
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

<body>
    <form>
        <h3>Faça Login</h3>
        <input type="text" name="email" placeholder="Digite seu e-mail" /> 
        <input type="text" name="user" placeholder="Nome de usuario" />
        <input type="password" name="senha" placeholder="Digite Sua senha" />
        <!-- <p><a href="recuperarsenha.htm">redefinir senha</a></p> -->
        <p><a href="cadastro.php">Cadastre</a></p>
        <input type="submit" nome="acao" value="Enviar" />
    </form>
</body>