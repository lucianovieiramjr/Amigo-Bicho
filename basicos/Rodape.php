<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>AMIGO BICHO: Rodapé</title>

        <!--Folhas de Estilo-->
        <link href="../css/W3.css" rel="stylesheet">
        <link href="../css/rodape.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css">

        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="../js/relogio.js" type="text/javascript"></script>
        <script src="../js/jquery-3.5.1.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/jquery.mask.min.js"></script>  
        <script src="../js/clima.js" type="text/javascript"></script>
        <script src="../js/Batata.js" type="text/javascript"></script>
        <script src="../js/aba.js" type="text/javascript"></script>
        <script src="../js/abreFechaOlhinho.js" type="text/javascript"></script>
        <script src="../js/buscaCep.js" type="text/javascript"></script>
        <script src="../js/mascaras.js" type="text/javascript"></script>
        <script src="../js/overlay.js" type="text/javascript"></script>
        <script src="../js/overlayInfo.js" type="text/javascript"></script>
        <script src="../js/overlaySenhaChefe.js" type="text/javascript"></script>
    </head>
    <body onload="horarioRodape(), clima()">
        <footer id="footer" class="w3-animate-bottom">
            <div id="divFooter">
                <span id="dataRodape"></span>&nbsp;
                <i class="fa fa-paw w3-small"></i>&nbsp;
                <span id="relogioRodape"></span>&nbsp;
                <i class="fa fa-paw w3-small"></i>&nbsp;
                <a id="shawn" href="https://www.accuweather.com/pt/br/s%C3%A3o-pedro-da-aldeia/40613/weather-forecast/40613" title="Veja como está o tempo em São Pedro da Aldeia detalhadamente" target="_blank"><span id="temperatura"></span>
                    <span id="temperatura">ºC</span>
                </a>
            </div>
        </footer>
    </body>
</html>
