<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozinha</title>
    <link rel="stylesheet" href="../css/cozinha.css">
    <link rel="stylesheet" href="../css/header-admin.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" type="image/png" href="img/logo-reduzida.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bangers&family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Luckiest+Guy&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=SN+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include "./view/header-admin.php" ?>

    <div class="topbar">
        <h1>Cozinha</h1>
        <p>Cada pedido, no seu tempo. Cada detalhe, com cuidado.</p>
    </div>

    <div class="pedidos">
        <!-- AGUARDANDO -->
        <div class="pedido">
            <div class="title aguardandotitle">
                <h2>Aguardando</h2>
                <span class="count" id="aguardando-count">1</span>
            </div>
            <div class="box-pedidos">
                <div class="top-box aguardando">
                    <div class="mesa-horario">
                        <h2>Mesa 1</h2>
                        <div class="horario">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z" />
                            </svg>
                            <span>12:30</span>
                        </div>

                    </div>
                    <div class="itens-pedidos">
                        <ul>
                            <li>Hot Roll (8 un.)</li>
                            <li>Temaki (1 un.)</li>
                        </ul>
                    </div>
                    <div class="btns-pedidos">
                        <button class="recusar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M175 175C184.4 165.7 199.6 165.7 208.1 175L255.1 222.1L303 175C312.4 165.7 327.6 165.7 336.1 175C346.3 184.4 346.3 199.6 336.1 208.1L289.9 255.1L336.1 303C346.3 312.4 346.3 327.6 336.1 336.1C327.6 346.3 312.4 346.3 303 336.1L255.1 289.9L208.1 336.1C199.6 346.3 184.4 346.3 175 336.1C165.7 327.6 165.7 312.4 175 303L222.1 255.1L175 208.1C165.7 199.6 165.7 184.4 175 175V175zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z" />
                            </svg> Recusar</button>
                        <button class="aceitar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z" />
                            </svg> Aceitar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- EM PREPARO -->
        <div class="pedido">
            <div class="title preparandotitle">
                <h2>Preparando</h2>
                <span class="count" id="preparando-count">1</span>
            </div>
            <div class="box-pedidos">
                <div class="top-box preparando">
                    <div class="mesa-horario">
                        <h2>Mesa 1</h2>
                        <div class="horario">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z" />
                            </svg>
                            <span>12:30</span>
                        </div>

                    </div>
                    <div class="itens-pedidos">
                        <ul>
                            <li>Hot Roll (8 un.)</li>
                            <li>Temaki (1 un.)</li>
                        </ul>
                    </div>
                    <button class="concluir"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z" />
                        </svg>Concluir pedido</button>

                </div>
            </div>
        </div>

        <!-- CONCLUÍDO -->
        <div class="pedido">
            <div class="title concluidotitle">
                <h2>Concluído</h2>
                <span class="count" id="concluido-count">1</span>
            </div>
            <div class="box-pedidos">
                <div class="top-box concluido">
                    <div class="mesa-horario">
                        <h2>Mesa 1</h2>
                        <div class="horario">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z" />
                            </svg>
                            <span>12:30</span>
                        </div>

                    </div>
                    <div class="itens-pedidos">
                        <ul>
                            <li>Hot Roll (8 un.)</li>
                            <li>Temaki (1 un.)</li>
                        </ul>
                    </div>
                    <button class="btn-concluido"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z" />
                        </svg> Pedido Concluído</button>

                </div>
            </div>
        </div>
    </div>

    <?php include "./view/footer.php" ?>
</body>

</html>