<?php 
include("../../config.php");

$db = $db->prepare("SELECT * FROM `produtos`");
$db->execute();
$produtos = $db->fetchAll();
?>

<head>
	<title>produtos</title>
	<link href="<?php echo INCLUDE_PATH ?>/css/adm.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .vitrine{
            display: flex;
        }

        .produto{
            border:1px solid black;
            margin-left:13px;
            padding:4px 5px;
        }

        .produto textarea{
            border:0px solid black;
            padding:4px 5px;
        }
    </style>
</head>

<body>
    <div class="vitrine">
        <?php
            foreach ($produtos as $key => $value) {
        ?>
            <div class="produto">
                <h2><?php echo $value["nome"]; ?></h2>
                <textarea name="" id="" cols="30" rows="10"><?php echo $value["descricao"]; ?></textarea>
                <p>Preço  -  Rs: <?php echo $value["preco"]; ?></p>
            </div>
        <?php
            }
        ?>
    </div>
</body>


