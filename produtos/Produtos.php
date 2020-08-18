<!DOCTYPE html>
<html>
    <head>    
        <title>AMIGO BICHO: Produtos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSSs externos -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="../css/W3.css" rel="stylesheet">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/rodape.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css">
        
        <!-- Scripts -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="../js/Batata.js"></script>
        <script src="../js/relogio.js" type="text/javascript"></script>
        <script src="../js/jquery-3.5.1.js" type="text/javascript"></script>  
        <script src="../js/clima.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/jquery.mask.min.js"></script>
        <script src="../js/mascaras.js" type="text/javascript"></script>
        
        <!-- CSS interno -->
        <style>
            input, td, th{height: 40px; padding: 5px;}
            table{margin: 0 auto;}
            th{background-color: #bfbfbf; width: 145px;} 
            .thInscEst{width: 160px;} 
            .thTitulo{width: 950px; letter-spacing: 2px; font-weight: 700; border-bottom: 3px solid; background-color: #e1e1d0; font-size: 120%}
            td{background-color: #e6e6e6}
            .spanCEP{font-weight: bold; font-size: 80%;}
        </style>
    </head>
    <body class="div1" onload="mascaras(), horarioRodape(), clima()">
        <!-- Navbar -->
        <?php include "../basicos/Navbar.php" ?>

        <!-- Page Content -->
        <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <?php include "../basicos/Cabecalho.php" ?>
        </div>   

        <div style="margin-right: 25px; margin-left:145px;">
            
            <!-- Guia -->
            <div id="caminho" class="w3-small">
                Você está em: <a class="links" href="home.php">HOME</a>
            </div>
            
            <p>
                A IDEIA AQUI É COLOCAR QUADRADOES COM AS OPÇÕES DOS PRODUTOS
            </p>
             
        </div>
        
        <!-- Footer -->
        <?php include "../basicos/Rodape.php"  ?>
        
    </body>
</html>    