<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .container > h1{
            border-bottom: 4px solid rgb(11, 112, 146);
            margin-bottom: 10px;
        }
    </style>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>petshop</title>
    <link rel="icon" href="../../assets/logos/logo.png" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css">
        <style>
            .btn-custom {
                background-color: deepskyblue;
                color: rgb(255, 255, 255);
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
                <input type="text" class="search-form">
                <span class="input-text" onclick="sorry()"><i class="fa fa-search"></i></span>
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
        <h1 class="mt-5 mb-3">Produtos relacionados a <?php echo$produto;?></h1>
        <div class="row">
            <!-- pra adicionar ou remover da lista e so copiar ou deletar um desses blocos-->
            <!-- <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="../../assets/high/dogfood.jpg" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">Produto 1</h5>
                        <p class="card-text">Descrição do Produto 1.</p>
                        <p class="card-text">Preço: R$ 99,99</p>
                        <a href="produto" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div> -->

            <?php
                for ($i=0; $i < 11; $i++) {
                    $numero = 99.99 + (0.20 * $i);
                    echo '
                        <div class="col-lg-4 mb-4">
                        <div class="card">';

                    // CONDICIONAIS // 
                    if ($produto == "Cachorros") {
                        echo '<img src="../../assets/high/dogfood.jpg" class="card-img-top" alt="Produto 1">';
                    }
                    elseif ($produto == "Pássaros") {
                        echo '<img src="../../assets/high/birdboxwood.jpg" class="card-img-top" alt="Produto 1">';
                    }
                    elseif ($produto == "Gatos") {
                        echo '<img src="../../assets/high/catbag.jpg" class="card-img-top" alt="Produto 1">';
                    }
                    elseif ($produto == "Hamister") {
                        echo '<img src="../../assets/high/foodham.jpg" class="card-img-top" alt="Produto 1">';
                    }
                    // CONDICIONAIS // 

                    echo '<div class="card-body">
                                <h5 class="card-title">Produto '.$i.'</h5>
                                <p class="card-text">Descrição do Produto 1.</p>
                                <p class="card-text">Preço: R$ '.$numero.'</p>
                                <a href="produto" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../script.js"></script>
</body>
</html>
