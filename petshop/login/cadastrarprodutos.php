<?php
include("php/config.php");

if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $url = $_POST['url'];
    $imagem = $_POST['imagem'];
    $grupo = $_POST['grupo'];
    $subcategoria = $_POST['subcategoria'];
    $sql = $db->prepare("INSERT INTO `produtos` (nome, preco, descricao, `url`, imagem, grupo, subcategoria) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $sql->execute(array($nome,$preco,$descricao,$url,$imagem,$grupo,$subcategoria));
    echo '<div class="erro-box"><i class="fa fa-times"></i> Produto cadastrado!</div>';
}
?>

<html>
<head>
    <title>cadastra produto</title>
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
			<h3 style="margin-bottom:35px;" >Cadastrar produto</h3>
			<input type="text" name="nome" placeholder="nome" required>
			<input type="text" name="preco" placeholder="preço" required>
            <input type="text" name="descricao" placeholder="descrição" required>
            <input type="text" name="url" placeholder="url" >
            <input type="text" name="imagem" placeholder="imagem" required>
            <input type="text" name="grupo" placeholder="grupo" required>
            <input type="text" name="subcategoria" placeholder="subcategoria" required>
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