<!DOCTYPE html>
<html>
    <head>    
        <title>AMIGO BICHO: Início</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Folhas de Estilo-->
        <link href="../css/W3.css" rel="stylesheet">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap">

        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="../js/Batata.js" type="text/javascript"></script>
        <script src="../js/relogio.js" type="text/javascript"></script>
        <script src="../js/jquery-3.5.1.min.js" ></script>  
        <script src="../js/clima.js" type="text/javascript"></script>
    </head>

    <body class="div1" onload="horarioHome(), clima()">

        <!-- Navbar -->
        <?php include "../basicos/Navbar.php" ?>

        <!-- Page Content -->
        <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <?php include "../basicos/Cabecalho.php" ?>
        </div>

        <div class="w3-padding-large" id="main">
            <div style="height: 20px;width: 100%;font-weight: bolder; margin-top: -12px" class="w3-medium" style="">
                Você está em: <a style="text-decoration: none;" href="../funcionarios/Funcionarios_Cadastrar.php" title='Página inicial'>HOME</a>
            </div>
            <div class="w3-display-container">
                <fieldset id="fieldsets" class="w3-panel w3-border-black w3-pale-white w3-display-topleft" > 
                    <legend style="padding:5px;"><b>Guia de Utilização do Sistema</b></legend>

                    <br>

                    Olá, usuário! Este é um guia para te ajudar a se localizar no sistema. Abaixo você encontrará informações sobre cada seção.
                    <dl>
                        <dt>( 1 ) Acesse a tela de VENDAS para:</dt>
                        <dd>- Efetuar nova venda;</dd>
                        <dd>- Pesquisar vendas realizadas;</dd>
                        <dd>- Gerar relatórios de faturamentos diário, semanal ou mensal;</dd>
                        <dt>( 2 ) Acesse a tela de FUNCIONÁRIOS para:</dt>
                        <dd>- Cadastrar ou editar dados de um(a) funcionário(a);</dd>
                        <dd>- Pesquisar dados de um(a) funcionário(a);</dd>
                        <dd>- Visualizar pendências relacionadas a funcionários.</dd>
                        <dt>( 3 ) Acesse a tela de ESTOQUE para:</dt>
                        <dd>- Gerenciar as mercadorias disponíveis;</dd>
                        <dd>- Verificar quais produtos estão em falta;</dd>
                    </dl>    

                </fieldset>

                <fieldset id="fieldsets" class="w3-panel w3-border-black w3-pale-white w3-display-topright" > 
                    <legend style="padding:5px;"><b>Horário</b></legend>
                    <div class="w3-display-container" style="height: 93%; width:100%">
                        <div class="w3-display-middle w3-center" style="width:100%; margin-top: -18px;">
                            <label id="clima" class="w3-center" style="margin-bottom: -10px">
                                <img src='' id="iconeClima" height="50px" width="50px" style="margin-top: -18px">
                                &nbsp;
                                <span style="font-size: 300%">
                                    <span id="temperatura"></span>
                                    <span>ºC</span>
                                </span>
                            </label><br>
                            <div id="relogio" class="w3-animate-opacity" style='font-size:600%; letter-spacing: 4px; margin-top: -12px; margin-bottom: -15px'></div><br>
                            <label id="data" class="w3-center" style=""></label><br>

                        </div>
                    </div>
                </fieldset>

            </div>
        </div>

    </body>
</html>