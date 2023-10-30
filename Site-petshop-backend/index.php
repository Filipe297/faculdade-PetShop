<?php
include("config.php");

//include("html/home.html"); //pode ser dessa forma tbm

$db = $db->prepare("SELECT * FROM `produtos`");
$db->execute();
$produtos = $db->fetchall();

if (isset($_SESSION['login']) == true) {
    echo '<div style="Color:black;" class="user"><i class="fa fa-times"></i> Você está logado! Bem vindo, '.$_SESSION['nome'].'</div>';
}else{
    echo "<header>
    <a href='php/form/login.php'>Login</a>
</header>";
}

?>

<html>
    <head>
        <link rel="stylesheet" href="css/index.css">
        <title>Petshop</title>
    </head>

    <body>
        <a href="php/produtos/produtos.php">produtos</a>
        <article>
            <h2>Projeto da faculdade</h2>
            <p>PetShop</p>
            <div>
                <img src="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExZXJ3YWZnZGVnM29xMnZscDI1Z2hzM2VncThzc2lqaHV4ZjAzdGYydyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/cfGmVRsJI6wq6noGxP/giphy.gif" alt="50px">
            </div>
        </article>
        <div style="Color:white;">
        <h2>Nossos produtos</h2>
           <?php
                foreach ($produtos as $key => $value) {
                    echo "<br/><br/><--------------><br/>";
                    echo $value['nome']."<br/>";
                    echo $value['descricao']."<br/>";
                    echo "Preço: Rs ".$value['preco']."<br/>";
                }
            ?> 
        </div>
        
        <script src="js/jquery.js"></script> <!-- Chama e inicializa o jquery-->
        <script src="js/slick.min.js"></script> <!-- Chama e inicializa plugin para fazer slides-->
        <script src="js/javascript.js"></script><!-- Chama e inicializa nossos escripts-->
    </body>
</html>

