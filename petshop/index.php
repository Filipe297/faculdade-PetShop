<?php  
include("login/php/config.php");
$sql = $db->prepare("SELECT * FROM `produtos`");
$sql->execute();
$produtos = $sql->fetchAll();

$sql = $db->prepare("SELECT * FROM `categorias`");
$sql->execute();
$categorias = $sql->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>petshop</title>
    <link rel="icon" href="assets/logos/logo.png" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css">
        <style>
            .bg-info{
                background-color: rgb(255, 255, 255) !important;
                width: 100%;
            }
        </style>
</head>

<body>
    <div class="site">
        <div class="topnav">
            <div class="search-line">
                <i class="fa fa-paw" id="open-btn" onclick="openside()"></i>
                <i class="fa fa-times" id="close-btn" onclick="closeside()"></i>
                <a href="#" onclick="javascript:play()">
                    <audio id="audio" src="assets/sounds/bark.wav"></audio>
                    <picture>
                        <source media="(min-width: 1050px)" srcset="assets/logos/logo.png">
                        <img id="logo" src="assets/logos/other_logo.png" alt="site-logo" width="40px">
                    </picture>
                </a>
                <form action="produtos/páginas/lista.php" method="GET" >
                    <input type="text" placeholder="pesquisar" name="produto" id="pesquisa" class="search-form"/><span class="input-text" onclick="produtopesquisa('produtos/páginas/lista.php?produto=')"><i class="fa fa-search"></i></span>
                </form>
            </div>
            <div class="account-menu">
                <ul>
                    <li><a href="#" onclick="javascript:sorry()"><i class="fa fa-shopping-cart"></i>Carrinho</a></li>
                    <li><a href="login/cadastro.php" onclick="">Inscrição</a></li>
                    <li><a href="login/index.php" onclick="">Login</a></li>
                </ul>
            </div>
            <div class="d-flex p-1 product-buttons bg-info">
                <button onclick="produto('produtos/páginas/lista.php?produto=Gatos')" type="button" class="btn btn-custom mr-2">Gatos</button>
                <button onclick="produto('produtos/páginas/lista.php?produto=Cachorros')" type="button" class="btn btn-custom mr-2">Cachorros</button>
                <button onclick="produto('produtos/páginas/lista.php?produto=Pássaros')" type="button" class="btn btn-custom mr-2">Pássaros</button>
                <button onclick="produto('produtos/páginas/lista.php?produto=Hamister')" type="button" class="btn btn-custom">Hamister</button>
            </div>
            <nav class="unic navbar navbar-expand-lg navbar-light"  style="padding-left: 8px;">
                <a class="unic navbar-brand" href="#" style="padding-left: 90%;">
                <button class="unic  navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="unic collapse navbar-collapse" id="navbarNav">
                    <ul class="unic">
                        <li><a href="login/cadastro.php" onclick="sorry()">Carrinho</a><i class="fa fa-shopping-cart"></i></li>
                        <li><a href="login/cadastro.php" onclick="">Inscrição</a></li>
                        <li><a href="login/index.php" onclick="">Login</a></li>
                    </ul>
                </div>
            </nav>
        </div> 

            <div class="slideshow">
                <div id="slideshow" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <picture>
                                <source media="(min-width: 1050px)" srcset="assets/low/birdboxyellow.jpg"
                                    class="d-block w-100">
                                <img src="assets/high/birdboxyellow.jpg" class="d-block w-100" alt="S1">
                            </picture>
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source media="(min-width: 1050px)" srcset="assets/low/cattoy.jpg"
                                    class="d-block w-100">
                                <img src="assets/high/cattoy.jpg" class="d-block w-100" alt="S2">
                            </picture>
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source media="(min-width: 1050px)" srcset="assets/low/foodham.jpg"
                                    class="d-block w-100">
                                <img src="assets/high/foodham.jpg" class="d-block w-100" alt="S3">
                            </picture>
                        </div>
                        <div class="carousel-item">
                            <picture>
                                <source media="(min-width: 1050px)" srcset="assets/low/dogtoyfris.jpg"
                                    class="d-block w-100">
                                <img src="assets/high/dogtoyfris.jpg" class="d-block w-100" alt="S4">
                            </picture>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                        <li data-target="#slideshow" data-slide-to="1"></li>
                        <li data-target="#slideshow" data-slide-to="2"></li>
                        <li data-target="#slideshow" data-slide-to="3"></li>
                    </ol>
                </div>
            </div>
        </header>

        <main>
            <section class="categories">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="single-prod">
                                <a href="#food">
                                    <picture>
                                        <source media="(min-width: 1050px)" srcset="assets/low/foodham.jpg">
                                        <img src="assets/high/foodham.jpg" alt="pic1">
                                    </picture>
                                </a>
                                <div class="overlay-up">
                                    <h3>Comida</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-prod">
                                <a href="#toys">
                                    <picture>
                                        <source media="(min-width: 1050px)" srcset="assets/low/birdtoy.jpg">
                                        <img src="assets/high/birdtoy.jpg" alt="pic1">
                                    </picture>
                                </a>
                                <div class="overlay-up">
                                    <h3>Acessórios</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-prod">
                                <a href="#clothes">
                                    <picture>
                                        <source media="(min-width: 1050px)" srcset="assets/low/dogclothes.jpg">
                                        <img src="assets/high/dogclothes.jpg" alt="pic2">
                                    </picture>
                                </a>
                                <div class="overlay-up">
                                    <h3>Roupas</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-prod">
                                <a href="#med">
                                    <picture>
                                        <source media="(min-width: 1050px)" srcset="assets/low/dogmed.jpg">
                                        <img src="assets/high/dogmed.jpg" alt="pic3">
                                    </picture>
                                </a>
                                <div class="overlay-up">
                                    <h3>Remédios</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="categsecs">
                <div class="container">
                    <?php 
                        foreach ($categorias as $key => $categoria) {
                        $i = 0;
                    ?>
                    <div <?php echo "id='".$categoria['idscrool']."'";?>></div>
                    <div class="categ-title">
                        <h2><?php echo $categoria["nome"]; ?></h2>
                    </div>
                    
                    <div class="row">
                        <?php 
                        foreach ($produtos as $key => $value) {
                            if ($categoria["nome"] == $value["subcategoria"] && $i < 4) { 
                        ?>
                        <div class="col-md-3">
                            <div class="prod-top">
                                <picture>
                                    <source media="(min-width: 1050px)" srcset="assets/low/<?php echo $value["imagem"];?> ">
                                    <img src="assets/high/<?php echo $value["imagem"]?>" alt="pic1">
                                </picture>
                                <div class="overlay-right">
                                    <button onclick="produto('produtos/produto.php?id=<?php echo $value['id'];?>')" type="button" class="btn btn-secondary" title="Αγορά">
                                        <i class="fa fa-credit-card"></i>
                                    </button><br>
                                    <button onclick="sorry()" type="button" class="btn btn-secondary"
                                        title="Προσθήκη στο Καλάθι">
                                        <i class="fa fa-cart-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="prod-bot text-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <h3><?php echo $value["nome"];?></h3>
                                <h5><?php echo $value["preco"];?></h5>
                            </div>
                        </div>
                        <?php 
                           $i++; } 
                        } 
                        ?>
                    </div>
                <?php } ?>
                </div>
            </section>
        </main>

        <!-- Footer- modelo do site https://mdbootstrap.com/docs/standard/navigation/footer/ -->
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
        <!-- Footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <script src="script.js"></script>
    </div>
</body>

</html>
