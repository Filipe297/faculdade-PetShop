<?php include("../../login/php/config.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Produtos</title>
    <link rel="icon" href="../../assets/logos/logo.png" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css">
        <style>
            .btn-custom {
                background-color: deepskyblue;
                color: rgb(255, 255, 255);
            }
            .container > h1{
            border-bottom: 4px solid rgb(11, 112, 146);
            margin-bottom: 10px;
        }
    
            /* Estilo para o ícone da lupa */
            .search-icon {
                background-image: url("https://cdn2.hubspot.net/hubfs/4004166/bioticresearch_website_assets/images/search_icon.png");
                background-repeat: no-repeat;
                background-position: right center;
                padding-right: 30px; /* Aumenta o espaço para acomodar o ícone */
            }
            .bg-info{
                background-color: rgb(255, 255, 255) !important;
                width: 100%;
                margin-top: -12px;
            }
            .topnav{
                border-bottom: 3px solid deepskyblue !important;
            }
            .slideshow{
                width: 100%;
                height: 500px;
                margin: 0% !important;
                
            }
            .w-100 {
                width: 100% !important;
                height: 700px;margin-top: -430px;
            }
            .card > img{
                height:260px;
            }.card-body{
                height:240px;
            }
        </style>
</head>
</head>
<body>
<div class="topnav">
            <div class="search-line">
                <i class="fa fa-paw" id="open-btn" onclick="openside()"></i>
                <i class="fa fa-times" id="close-btn" onclick="closeside()"></i>
                <a href="../../" onclick="javascript:play()">
                    <audio id="audio" src="assets/sounds/bark.wav"></audio>
                    <picture>
                        <source media="(min-width: 1050px)" srcset="../../assets/logos/logo.png">
                        <img id="logo" src="../../assets/logos/other_logo.png" alt="site-logo" width="40px">
                    </picture>
                </a>
                <form method="GET" >
                <input type="text" name="produto" id="pesquisa" class="search-form"/><span class="input-text" onclick="produtopesquisa('lista.php?produto=')"><i class="fa fa-search"></i></span>
                </form>
            </div>
            <div class="account-menu">
                <ul>
                    <li><a href="#" onclick="javascript:sorry()"><i class="fa fa-shopping-cart"></i>Carrinho</a></li>
                    <li><a href="../../login/cadastro.php" onclick="">Inscrição</a></li>
                    <li><a href="../../login/index.php" onclick="">Login</a></li>
                </ul>
            </div>
            <div class="d-flex p-1 product-buttons bg-info">
            <button onclick="produto('?produto=Gatos')" type="button" class="btn btn-custom mr-2">Gatos</button>
                <button onclick="produto('?produto=Cachorros')" type="button" class="btn btn-custom mr-2">Cachorros</button>
                <button onclick="produto('?produto=Pássaros')" type="button" class="btn btn-custom mr-2">Pássaros</button>
                <button onclick="produto('?produto=Hamister')" type="button" class="btn btn-custom">Hamister</button>
            </div>
        </div> 
</div>

    <div class="container">
        <?php $produto = $_GET['produto'];?>
        <h1 class="mt-5 mb-3">Produtos relacionados a: <?php echo$produto;?></h1>
        <div class="row">
            <?php   
                $sql = $db->prepare("SELECT * FROM `produtos` WHERE grupo = ? OR nome = ? OR subcategoria = ?");
				$sql->execute(array($produto, $produto, $produto));
                if($sql->rowCount() != 0){
                    $produtos = $sql->fetchAll();
                        foreach ($produtos as $key => $value) { 
                            echo '
                                <div class="col-lg-4 mb-4">
                                    <div class="card">
                                        <img src="../../assets/high/'.$value["imagem"].'" class="card-img-top" alt="Produto 1">
                                        <div class="card-body">
                                            <h5 class="card-title">'.$value["nome"].'</h5>
                                            <p class="card-text">'.$value["descricao"].'</p>
                                            <p class="card-text">'.$value["preco"].'</p>
                                            <a href="../produto.php?id='.$value["id"].'" class="btn btn-primary">Comprar</a>
                                            <a href="#id='.$value["id"].'" class="btn btn-primary">Adicionar ao carrinho</a>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                }else{
                    echo "<h4 class='mt-5 mb-3'>Não encontramos produtos relacionados a: $produto.</h4>";
                }
            ?>
        </div>
    </div>

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../script.js"></script>
</body>
</html>
