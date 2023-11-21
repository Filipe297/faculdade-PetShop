<?php 
include("../login/php/config.php");

$id = $_GET['id'];
$sql = $db->prepare("SELECT * FROM `produtos` WHERE id = ?");
$sql->execute(array($id));
$produtos = $sql->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página do Produto</title>
    <!-- Adicione os links para os arquivos CSS e JavaScript do Bootstrap -->
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../assets/logos/logo.png" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Cabeçalho da Página -->
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: cornflowerblue;" style="padding-left: 8px;">
            
            <a class="navbar-brand" href="../" style="padding-left: 8px;"> <img src="../assets/logos/logo_size.jpg" alt="logo" width="40" height="40"> Petshop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../">Pagina Inicial</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Conteúdo da Página -->
    <main class="container mt-4">
        <div class="row">
            <!-- Imagem do Produto -->
            <div class="col-lg-6">
                <img src="../assets/high/<?php echo $produtos[0]['imagem']; ?>" class="img-fluid" alt="Osso para Cachorro">
            </div>
            <!-- Detalhes do Produto -->
            <div class="col-lg-6">
                <h1><?php echo $produtos[0]['nome']; ?></h1>
                <p class="lead"><?php echo $produtos[0]['preco']; ?></p>
                <p><?php echo $produtos[0]['descricao']; ?></p>
                <div class="mb-3">
                    <label for="opcoes">Forma de Pagamento</label>
                    <select class="form-control" id="opcoes">
                        <option>Cartão</option>
                        <option>Debito</option>
                        <option>Pix</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="conf()">Comprar</button>
            </div>
        </div>
    </main>

    <!-- Avaliações de Clientes -->
    <br><br>
    <section class="container mt-4">
        <h2>Avaliações</h2>
        <br>
        <!-- Exiba as avaliações dos clientes aqui -->
        <div class="media">
            <div class="media-body">
                <h5 class="mt-0">Avaliador 1</h5>
                <p>Excelente produto! Eu daria 5 estrelas. meu pet adorou!</p>
            </div>
        </div>
        <div class="media">
            <div class="media-body">
                <h5 class="mt-0">Avaliador 2</h5>
                <p>Boa qualidade, mas preço um pouco alto. Dou 4 estrelas.</p>
            </div>
        </div>
        <!-- Adicione mais avaliações conforme necessário -->
    </section>

    <!-- Produtos Relacionados -->
    <section class="container mt-4">
        <br><br><br>
        <h2>Produtos Relacionados</h2><br>
        <!-- Exiba produtos relacionados aqui -->
        <div class="row">
            <?php  
            $grupo = $produtos[0]['grupo'];
            $subcategoria = $produtos[0]['subcategoria'];
            $i = 0;
            $sql = $db->prepare("SELECT * FROM `produtos` WHERE grupo = ? OR subcategoria = ?");
            $sql->execute(array($grupo, $subcategoria));
            $relacionados = $sql->fetchAll();

            foreach ($relacionados as $key => $value) {
                if ($i < 3) { 
            ?>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="../assets/high/<?php echo $value["imagem"]; ?>" class="card-img-top" alt="Produto Relacionado 1">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value["nome"]; ?></h5>
                            <p class="card-text"><?php echo $value["preco"]; ?></p>
                            <a href="produto.php?id=<?php echo $value["id"]; ?>" class="btn btn-primary">Ver Detalhes</a>
                        </div>
                        
                    </div>
                </div>
            <?php $i++;
                } 
            } ?> 
        </div>
    </section>

    <!-- Rodapé da Página -->
    <footer class="text-center text-lg-start bg-light text-muted">
            
            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>PROJECT64
                            </h6>
                            <p>
                                Esse projeto esta sendo desenvolvido pelo grupo de alunos de html e css do
                                professor Davi Barros. Esse projeto é sobre uma loja virtual de petshop!!
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                LINKS ÚTEIS
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Valores</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Configurações</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Pedidos</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Ajuda</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contato</h6>
                            <p><i class="fas fa-home me-3"></i> Abdias , Recife 10012, PE</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                petshop@petshop.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 55 999 888 77</p>
                            <p><i class="fas fa-print me-3"></i> + 55 999 888 66</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2023 Copyright:
                <a class="text-reset fw-bold" href="SobreNos.html">Sobre Nós</a>
            </div>
            <!-- Copyright -->
        </footer>

    <!-- Adicione os links para os arquivos JavaScript do Bootstrap e jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>
