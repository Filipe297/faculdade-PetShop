<?php
include("php/config.php");

if(isset($_POST['acao'])){
    $user = $_POST['user'];
    $nome = $_POST['nome'];
    $password = $_POST['senha'];
    $email = $_POST['email'];
    $sql = $db->prepare("INSERT INTO `usuarios` (`login`, nome, senha , email) VALUES (?, ?, ?, ?)");
    $sql->execute(array($user,$nome,$password,$email));
    echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário adicionado!</div>';
}
?>

<html>
<head>
    <title>cadastra ao usuário</title>
    <link rel="icon" href="../assets/logos/logo.png" type="image/gif" sizes="20x20">
  
  <style>
     *{margin: 0;padding: 0;box-sizing: border-box;}
     body{
         background-color: deepskyblue;
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
     a{
       color: deepskyblue;
     }
  </style>
  
  <body>
  <div class="topnav">
      <form method="post">
			<h3 style="margin-bottom:35px;" >Cadastrar usuário</h3>
			<input type="text" name="user" placeholder="Login..." required>
			<input type="password" name="senha" placeholder="Senha..." required>
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="text" name="email" placeholder="seu melhor email..." required>
			<div class="form-group-login alingcenter">
				<input type="submit" class="alingcenter" name="acao" value="Cadastrar!">
			</div>
            <div class="form-group-login right">
				<a href="index.php">Voltar para login</a>
			</div>
			<div class="clear"></div>
		</form>
  </body>
  </html>