<?php include "./data/produtos.php" ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Kyoto</title>
    <link rel="stylesheet" href="../css/cardapio.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bangers&family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Luckiest+Guy&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=SN+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo-reduzida.webp">
</head>

<body>
    <?php include "./view/header.php" ?>

    <div class="produtos">
        <?php foreach ($produtos as $produto): ?>
            <div class="produto-card">
                <div class="produto-imagem">
                    <span class="quantidade">
                        <img src="img/layers.svg" alt="layers" class="layers">
                        <p>8 peças</p>
                    </span>
                    <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>"
                        class="imagem-produto">
                </div>
                <div class="produto-info">
                    <h2><?php echo $produto['nome']; ?></h2>
                    <p><?php echo $produto['descricao']; ?></p>
                    <div class="produto-acoes">
                        <strong>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></strong>
                        <button>Adicionar ao Pedido</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <!-- 
    <div class="produtos">
        <div class="produto-card">

            <div class="produto-imagem">
                <span class="quantidade">
                    <img src="img/layers.svg" alt="layers" class="layers">
                    <p>8 peças</p>
                </span>

                <img src="img-produtos/California Roll.png" alt="California Roll" class="imagem-produto">
            </div>

            <div class="produto-info">
                <h2>California Roll</h2>

                <p>
                    O California Roll (Uramaki Califórnia) é um estilo
                    de sushi invertido que se tornou um dos pratos mais
                    populares da culinária fusion ocidental-asiática.
                </p>

                <div class="produto-acoes">
                    <strong>R$ 34,90</strong>

                    <button>Adicionar pedido</button>
                </div>
            </div>

        </div>  
        
    </div> -->

    <?php include "./view/footer.php" ?>
</body>

</html>