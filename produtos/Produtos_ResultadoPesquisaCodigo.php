<!DOCTYPE html>
<html>
    <head>    
        <title>AMIGO BICHO: Resultado de pesquisa por código de produto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/overlay.css" type="text/css" rel="stylesheet">
        <link href="../css/overlaySenhaChefe.css" rel="stylesheet" type="text/css"/>
        <script src="../js/overlay.js" type="text/javascript"></script>
        <script src="../js/overlaySenhaChefe.js" type="text/javascript"></script>
        <script src="../js/Batata.js"></script>
        <script type="text/javascript" src="../js/jquery-3.5.1.min.js" ></script>
        <script type="text/javascript" src="../js/jquery.mask.min.js"></script>       

        <style>
            #icones{ font-size: 120%;}
            .inputPesquisa{height: 45px; font-weight: bold; font-size: 120%;}
            .thCodigo, .thDesc, .thPreco, .thQntd{text-align: left;background-color: #bfbfbf; }
            .thCodigo{width: 190px;}
            .thDesc{width: 350px;}
            .thPreco{width: 150px;}
            .thQntd{width: 150px;}
            input, td, th{height: 40px; padding: 5px;}
            table{margin: 0 auto; border: 0;}
            .tdPesquisa{background-color: #e6e6e6}
        </style>
    </head>

    <body class="div1" onload="horario()">

        <!-- Navbar -->
        <?php include "../basicos/Navbar.php" ?>


        <!-- Page Content -->
        <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <?php include "../basicos/Cabecalho.php" ?>

        </div>
        <div style="margin-right: 25px; margin-left:145px;">

            <div id="caminho" class="w3-small">
                Você está em: <a class="links" href="home.php">HOME</a>
            </div>

            <p style="font-size: 120%">Exibindo resultados para "<span id="CodigoProdutoPesquisado" style="font-weight: bold; color: #000033;">0123456789</span>"</p>

            <!-- TABELA COM OS PRODUTOS-->
            <table style="font-size: 120%; padding-top: 10px;">
                <tr style="font-weight: bold;">
                    <th class="thCodigo">Código do produto</th>
                    <th class="thDesc">Descrição</th>
                    <th class="thPreco">Preço</th>
                    <th class="thQntd">Quantidade</th>
                </tr>
                <tr>
                    <td class="tdPesquisa"><span id="codigoProduto"> 08081998 </span></td>
                    <td class="tdPesquisa"><span id="descricaoProduto"> amor </span></td>
                    <td class="tdPesquisa"> R$ <span id="precoProduto"> </span>8.819,98</td>
                    <td class="tdPesquisa"><span id="qntdProduto"> 1,88 </span><span id="unidadeMedidaProduto"> m </span></td>
                    <td class="tdPesquisa">
                        <form method="post" action="AtualizarDadosProduto.php">
                            <button id="icones" title="Atualizar dados do produto" class="fa fa-refresh" style="height: 40px; width: 40px; font-size:120%"></button>
                        </form>
                    </td>
                    <td class="tdPesquisa">
                        <button id="icones" title="Excluir dados do produto" onclick="abreOverlayExcluir()" class="fa fa-trash" style="height: 40px; width: 40px; font-size:120%"></button>
                    </td>
                </tr>
            </table>
            <br>
            <div style="text-align: center; font-size: 90%">
                <a href="PesquisarProduto.php" style="text-decoration: none"><button style="height: 40px; width: 250px; font-weight: bold;" class="botaoNova">REALIZAR NOVA CONSULTA</button></a>
            </div>
            <p>
                - Quando clicar no botão de atualizar, ir para a página AtualizaDadosProduto; <br>
                - Quando clicar no botão de excluir:
                - Abrir uma caixa de diálogo: Tem certeza de que desea excluir, se SIM, pedir a senha do chefe; se não, fecha a caixa.
            </p>
        </div>
        <div id="overlay">
            <form>
                <div id="textOverlay">
                    <h1 style="font-size: 200%">Amigo Bicho alerta:</h1>
                    <div class="divInfoOverlay">
                        <p class="temCerteza">
                            Tem certeza de que deseja excluir o produto: </p> <br> 

                        <table class="tabelaProduto"> 
                            <tr>
                                <th class="thTabelaProduto"> CÓDIGO: </th>
                                <td class="tdTabelaProduto"> <span id="codigoProduto"> [Código do produto] </span> </td>	
                            </tr>
                            <tr>
                                <th class="thTabelaProduto"> DESCRIÇÃO: </th>
                                <td class="tdTabelaProduto"> <span id="descricaoProduto"> [Descrição do produto] </span> </td>	
                            </tr>
                        </table>
                    </div> <br> 
                    <p class="temCerteza"> do estoque? </p>

                    <div class="divBotoesOverlay">
                        <button class="w3-button w3-green" onclick="abreOverlaySenhaChefe()" style="height: 40px; width: 105px; font-weight: bold;"> SIM </button>
                        &nbsp; 
                        <button class="w3-button w3-red" onclick="fechaOverlayExcluir()" style="height: 40px; width: 105px; font-weight: bold;"/> NÃO </button>
                    </div>
                </div>
            </form>
        </div>
        <div id="overlaySenhaChefe">
            <form>
                <div id="textOverlay">
                    <h1 style="font-size: 200%">Para concluir a ação, por favor, insira a senha do chefe/administrador:</h1>

                    <input id="pass" class="senha" align="left" type="password" name="senha" size="15" title="Insira a senha do chefe/administrador" required>
                    <span id="olho" class="fa fa-eye" title="Mostrar senha" onclick="abreFechaOlhinho()"></span>

                    <div class="divBotoesOverlay">
                        <input title="Concluir ação" type="submit" value="CONCLUIR" class="w3-button w3-green" style="height: 50px; width: 105px; font-weight: bold;">
                        &nbsp; 
                        <button class="w3-button w3-red" onclick="fechaOverlaySenhaChefe()" style="height: 50px; width: 105px; font-weight: bold;"/> CANCELAR </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <?php include "../basicos/Rodape.php" ?>

    </body>
</html>    