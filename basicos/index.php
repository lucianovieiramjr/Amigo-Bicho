<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Folhas de estilo -->
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="../css/W3.css" rel="stylesheet" type="text/css"/>
        <link href="../css/overlayInfo.css" rel="stylesheet" type="text/css"/>


        <!-- Scripts -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="../js/Batata.js" type="text/javascript"></script>
        <script src="../js/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="../js/jquery.mask.min.js" type="text/javascript"></script>
        <script src="../js/overlay.js" type="text/javascript"></script>
        <script src="../js/overlayInfo.js" type="text/javascript"></script>
        <script src="../js/clima.js" type="text/javascript"></script>
        <script src="../js/relogio.js" type="text/javascript"></script>
        <script src="../js/abreFechaOlhinho.js" type="text/javascript"></script>
        <script src="../js/mascaras.js" type="text/javascript"></script>

        <title>AMIGO BICHO: Área de login</title>
    </head>
    <body onload="mascaras(), relogioRodape(), clima()">
        <div class="inicio1">
            <div class="container-fluid">

                <div id="inicio2" class="w3-display-container" >

                    <h1 class="h1Index w3-text-white">Amigo Bicho <i class="fa fa-paw " style="font-size:65px; color: #e1e1d0"></i></h1>

                    <div id="inicio3" class="w3-animate-opacity w3-display-container">
                        <div>    
                            <a href="../basicos/Home.php">Ir Para Home</a>
                        </div>
                        <h2 class="h2Index w3-text-white"><b>Área Restrita</b></h2>

                        <form method="POST" action="valida.php">
                            <div style="text-align: right;">
                                <table border="0" style="width:99%; margin:0 auto">    
                                    <tr>
                                        <th style="height: 50px; width: 50px; padding-left: 15px;">
                                            <label>
                                                <i id="icones" class="fa fa-user w3-text-white"></i>
                                            </label>
                                        </th>
                                        <td style="text-align: left !important; ">
                                            <input style='width:95%;' type="user" name="user" class="inputCPF" id="user" placeholder="CPF" required autofocus>
                                        </td>
                                    </tr>
                                    <tr style="height: 5px; padding:15px"></tr>
                                    <tr>
                                        <th style="height: 50px; width: 50px; padding-left: 15px;">
                                            <label>
                                                <i id="icones" class="fa fa-lock w3-text-white"></i>
                                            </label>
                                        </th>
                                        <td style="text-align: left !important;">
                                            <input style='width:95%;' type="password" name="senha" id="pass" class="inputSenha" placeholder="Senha" required>
                                            <i id="olho" class="fa fa-eye" onclick="abreFechaOlhinho()" style="flex: 1 0 0; margin-left: -36px;"></i>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <button id="btEntrar" type="submit" title="Entrar no sistema">ENTRAR</button>

                        </form>
                    </div> 
                    <div class="w3-display-bottomleft">
                        <i class="fa fa-info-circle" id="iconeInfo" onclick="abreOverlayInfo()" title="Saiba mais"></i>
                    </div>

                    <div id="overlayInfo">
                        <div class="w3-display-container">
                            <div class="w3-display-topright">
                                <button id="botaoFechaOverlayInfo" class="w3-button w3-red w3-display-topright" title="Fechar" onclick="fechaOverlayInfo()"><i class='fa fa-close'></i></button>
                            </div>
                            <div class="w3-animate-opacity" id="textOverlayInfo">
                                <h1 style="font-size: 200%; text-align: center; font-weight: 800;">Aplicação Web de Automação Comercial: Amigo Bicho</h1>
                                <div id="paragrafoTextOverlayInfo">
                                    <p>
                                        Este sistema foi desenvolvido com muito carinho pelas alunas Débora dos Santos Pereira, Gabrielly Santos Lopes, Hingrid Monteiro Costa e pelo aluno Luciano Vieira Mendonça Junior da turma INF171 do curso Técnico em Informática integrado ao Ensino Médio do Instituto Federal do Rio de Janeiro - <i>Campus</i> Arraial do Cabo. 
                                    </p>
                                    <p>
                                        Este sistema é o produto final do Trabalho de Conclusão de Curso do grupo de estudantes citado anteriormente, o qual teve a orientação do querido Professor e Mestre Marcelo Simas Mattos. 
                                    </p>
                                </div>
                                <br>
                                <div>
                                    <img id="logo_overlay_info" src="../imagens/logos_overlay_info.png" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Rodapé -->
        <?php include "../basicos/Rodape.php" ?>

    </body>
</html>

