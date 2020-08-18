<!DOCTYPE html>
<html>
    <head>    
        <title>AMIGO BICHO: Pesquisar Produto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/Batata.js"></script>
        <script src="../js/aba.js" type="text/javascript"></script>
        <link href="../css/aba.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="../js/jquery-3.5.1.min.js" ></script>
        <script type="text/javascript" src="../js/jquery.mask.min.js"></script>
        
        
        <style>
            .inputPesquisa{height: 45px; font-weight: bold; font-size: 120%;}
            button{ font-size: 150%;}
        </style>
    </head>
    <body class="div1">

        <!-- Navbar -->
        <?php include "../basicos/Navbar.php" ?>

        <!-- Page Content -->
        <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <?php include "../basicos/Cabecalho.php" ?>
        </div>

        <div class="w3-padding-large" id="main">
            <div style="height: 20px;width: 100%;text-decoration: none; font-weight: bolder;margin-top: -12px" class="w3-small">
                
            </div>
            Você está em: <a href="../basicos/Home.php">HOME</a>
            <div>
                
                <div style="margin: 0 auto; width: 75%; margin-top: 5%">
                    <div id="divFora">
                        <div id="divPesquisaCodigo"> 
                            <center>
                                <div style="padding-bottom: 20px;">
                                    <form method="post" action="ResultadoPesquisaCodigoProduto.php">
                                        <br><input class="inputPesquisa" align="left" type="text" name="codigoProduto" size="50" required placeholder="Insira aqui o código do produto">
                                        <button title="Pesquisar" type="submit" class="fa fa-search" style="height: 45px; width: 55px; font-size:120%"></button>
                                    </form>
                                </div>
                            </center>
                        </div>
                        <div id="divPesquisaNome"> 
                            <center>
                                <div style="padding-bottom: 20px;">
                                    <form method="post" action="ResultadoPesquisaNomeProduto.php">
                                        <br><input class="inputPesquisa" align="left" type="text" name="nomeProduto" size="50" required placeholder="Insira aqui o nome do produto">
                                        <button title="Pesquisar" type="submit" class="fa fa-search" style="height: 45px; width: 55px; font-size:120%"></button>
                                    </form>
                                </div>
                            </center>				
                        </div>
                        <div id="divPesquisaFornecedor"> 
                            <center>
                                <div style="padding-bottom: 20px;">
                                    <form method="post" action="ResultadoPesquisaFornecedorProduto.php">
                                        <br><input class="inputPesquisa" align="left" type="text" name="fornecedorProduto" size="50" required placeholder="Insira aqui o fornecedor do produto">
                                        <button title="Pesquisar" type="submit" class="fa fa-search" style="height: 45px; width: 55px; font-size:120%"></button>
                                    </form>
                                </div>
                            </center>
                        </div>
                    </div>
                    <script>
                        var aba = new JTabControl("divFora", 500, 300);

                        aba.addTab("divPesquisaCodigo", "&nbsp; PESQUISAR POR CÓDIGO &nbsp;");
                        aba.addTab("divPesquisaNome", "&nbsp; PESQUISAR POR NOME &nbsp;");
                        aba.addTab("divPesquisaFornecedor", "&nbsp; PESQUISAR POR FORNECEDOR &nbsp;");
                    </script>

                </div>
            </div>
        </div>
    
        <!-- Footer -->
        <?php include "../basicos/Rodape.php" ?>

    </body>
</html>    