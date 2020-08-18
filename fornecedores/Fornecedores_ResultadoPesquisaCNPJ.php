<!DOCTYPE html>
<html>
    <head>    
        <title>AMIGO BICHO: Resultado de pesquisa por CNPJ de fornecedor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/overlay.css" type="text/css" rel="stylesheet">
        
        <script src="../js/overlay.js" type="text/javascript"></script>
        <script src="../js/clima.js" type="text/javascript"></script>
        <script src="../js/relogio.js" type="text/javascript"></script>
        <script src="../js/Batata.js" type="text/javascript"></script>
        <script src="../js/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="../js/jquery.mask.min.js" type="text/javascript"></script>
        <script src="../js/mascaras.js" type="text/javascript"></script>
        
        <style>
            #icones{ font-size: 150%;}
            .inputPesquisa{height: 45px; font-weight: bold; font-size: 120%;}
            .thNome, .thCnpj, .thTelefoneCelular, .thTelefoneFixo{text-align: left;}
            .thNome{width: 300px;}
            .thCnpj{width: 200px;}
            .thTelefoneCelular{width: 200px;}
            .thTelefoneFixo{width: 200px;}
            input, td, th{height: 40px; padding: 5px;}
            table{margin: 0 auto; border: 0;}
            th{background-color: #bfbfbf; width: 245px;} 
            td{background-color: #e6e6e6}
        </style>
    </head>

    <body class="div1" onload="mascaras(), horarioRodape(), clima(), fechaOverlayExcluir()">
        <!-- Navbar -->
        <?php include "../basicos/Navbar.php" ?>

        <!-- Page Content -->
        <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <?php include "../basicos/Cabecalho.php" ?>
        </div>
            
        <div style="margin-right: 25px; margin-left:145px;">
            <p style="font-size: 120%">Exibindo resultados para "<span id="NomeFuncionarioPesquisado" style="font-weight: bold; color: #000033;">Exemplo</span>"</p>

            <!-- TABELA COM OS FORNECEDORES-->
            <table style="font-size: 120%; padding-top: 10px;">
                <tr style="font-weight: bold;">
                    <th class="thNome">Nome fantasia do fornecedor</th>
                    <th class="thCnpj">CNPJ</th>
                    <th class="thTelefoneFixo">Telefone Fixo</th>
                    <th class="thTelefoneCelular">Telefone Celular</th>
                </tr>
                <tr>
                    <td class="nomeFantasiaFornecedor"><span id="nomeFantasiaFornecedor"> Exemplo </span></td>
                    <td class="cnpjFornecedor"><span id="cnpjFornecedor"> 123.456.789-00 </span></td>
                    <td class="telefoneFixoFornecedor"><span id="telefoneFixoFornecedor"> (22)2222-2222 </span></td>
                    <td class="telefoneCelularFornecedor"><span id="telefoneCelularFornecedor"> (22)99105-9478 </span></td>
                    <td class="thBotaoDetalhar">
                        <button id="icones" title="Detalhar dados do fornecedor" onclick="abreOverlayDetalhar()" class="fa fa-vcard" style="height: 40px; width: 40px; font-size:120%"></button>
                    </td>
                    <td class="thBotaoAtualizar">
                        <form method="post" action="../fornecedores/Fornecedores_Atualizar.php">
                            <button id="icones" title="Atualizar dados do fornecedor" class="fa fa-refresh" style="height: 40px; width: 40px; font-size:120%"></button>
                        </form>
                    </td>
                    <td class="thBotaoExcluir">
                        <button id="icones" title="Excluir dados do funcionário" onclick="abreOverlayExcluir()" class="fa fa-trash" style="height: 40px; width: 40px; font-size:120%"></button>
                    </td>
                </tr>
            </table>
            <br>
            <div style="text-align: center; font-size: 90%">
                <a href="../funcionarios/Fornecedor_Pesquisar.php" style="text-decoration: none"><button style="height: 40px; width: 250px; font-weight: bold;" class="botaoNova">REALIZAR NOVA CONSULTA</button></a>
            </div>
            <p>
                - Fazer o overlay para detalhar os dados do fornecedor <br>
                - Quando clicar no botão de atualizar, ir para a página AtualizaDadosFuncionario; <br>
                - Quando clicar no botão de excluir:
                - Abrir uma caixa de diálogo: Tem certeza de que deseja excluir, se SIM, pedir a senha do chefe; se não, fecha a caixa.
            </p>
        </div>
        <div id="overlay">
            <div id="textOverlay">
                <h1 style="font-size: 200%">Amigo Bicho alerta:</h1>
                <form action="">
                    <p style="text-align: center; color: white; font-size: 180%">Tem certeza de que deseja excluir <br> <span id="nomePopUp">[Nome do fornecedor] </span> <br> da lista de Fornecedor?</p>
                    <div class="divBotoesOverlay">
                        <input class="w3-button w3-green" type="submit" value="SIM" style="height: 40px; width: 105px; font-weight: bold;">
                        &nbsp; 
                        <button class="w3-button w3-red" onclick="fechaOverlayExcluir()" style="height: 40px; width: 105px; font-weight: bold;"/> NÃO </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Footer -->
        <?php include "../basicos/Rodape.php"  ?>

    </body>
</html>      