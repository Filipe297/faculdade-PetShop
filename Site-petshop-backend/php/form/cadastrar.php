<?php
include("../../config.php");
if(isset($_POST['acao'])){
    $user = $_POST['user'];
    $nome = $_POST['nome'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = $db->prepare("INSERT INTO `usuarios` (login, nome, senha , email) VALUES (?, ?, ?, ?)");
    $sql->execute(array($user,$nome,$password,$email));
    echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário adicionado!</div>';
}
?>

<form method="post">
			<h3 style="margin-bottom:35px;" >Cadastrar usuario</h3>
			<input type="text" name="user" placeholder="Login..." required>
			<input type="password" name="password" placeholder="Senha..." required>
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="seu melhor email..." required>
			<div class="form-group-login alingcenter">
				<input type="submit" class="alingcenter" name="acao" value="Cadastrar!">
			</div>
			<div class="form-group-login right">
				<input type="checkbox" name="lembrar" />
			</div> 
            <div class="form-group-login right">
				<a href="login.php">Voltar para login</a>
			</div>
			<div class="clear"></div>
		</form>