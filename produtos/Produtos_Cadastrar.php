<!DOCTYPE html>
<html>
    <head>    
        <title>AMIGO BICHO: Cadastrar Produto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/W3.css" rel="stylesheet" type="text/css"/>
        
        <!-- Scripts -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="../js/Batata.js"></script>
        <script src="../js/relogio.js" type="text/javascript"></script>
        <script src="../js/jquery-3.5.1.js" type="text/javascript"></script>  
        <script src="../js/clima.js" type="text/javascript"></script>
        <script src="../js/jquery.mask.min.js" type="text/javascript"></script>
        <script src="../js/mascaras.js" type="text/javascript"></script>
        

        <style>
            input, td, th{height: 40px; padding: 5px;}
            table{margin: 0 auto;}
            th{background-color: #bfbfbf; width: 160px;} 
            .thUnidadeMedida{width: 200px;} 
            .thTitulo{width: 950px; letter-spacing: 4px; font-weight: 700; border-bottom: 3px solid; background-color: #e1e1d0; font-size: 120%}
            td{background-color: #e6e6e6}
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
                Você está em: <a class="links" href="../basicos/Home.php">HOME</a>
            </div>
            
            <fieldset style="border: 0; width: 88%; margin: 0 auto;">
                <form method="post" action="guarda_func.php" oninput="unidade.value = unidadeA.value = unidadeMedida.value">
                    <table border="0" style="padding-bottom: 10px;">
                        <tr>
                            <th align="center" class="thTitulo"> CADASTRO DE PRODUTO</th>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <th align="left" width="300px;"> Código: </th>
                            <td colspan="3"><input align="left" type="text" name="id_produto" size="61" required placeholder="Código do produto"></td>
                        </tr>
                        <tr>
                            <th align="left"> Descrição: </th>
                            <td colspan="3"><input align="left" type="text" name="descricao" size="61" required placeholder="Descrição do produto"/> </td>
                        </tr>
                        <tr>
                            <th align="left"> Marca: </th>
                            <td colspan="3"><input align="left" type="text" name="marca" size="61" required placeholder="Marca do produto"/> </td>
                        </tr>
                        <tr>
                            <th align="left"> Grupo: </th>
                            <td>
                                <input align="left" type="text" name="grupo" size="20" required placeholder="Grupo do produto"/>
                            </td>
                            <th align="left" class="thUnidadeMedida"> &nbsp; Unidade de medida:</th>
                            <td>
                                <select name="unidadeMedida">
                                    <option value="kg">kg</option>
                                    <option value="g">g</option>
                                    <option value="L">L</option>
                                    <option value="mL">mL</option>
                                    <option value="m">m</option>
                                    <option value="cm">cm</option>
                                    <option value="un.">un.</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th align="left"> Quantidade: </th>
                            <td>
                                <input align="left" type="text" name="qntd" size="1" required />&nbsp;<output name="unidade" for="unidadeMedida"></output>
                            </td>
                            <td colspan="3" rowspan="4" style="text-align: center;"><i class="fa fa-paw" style="font-size: 1100%;"></i></td>
                        </tr>
                        <tr>
                            <th align="left"> Estoque mínimo: </th>
                            <td>
                                <input align="left" type="text" name="estoqueMinimo" size="1" required />&nbsp;
                                <output name="unidadeA" for="unidadeMedida"></output>
                            </td>
                        </tr>
                        <tr>
                            <th align="left"> Preço de custo: </th>
                            <td> R$ <input align="left" id="precoCusto" type="text" name="precoCusto" size="10" /></td>
                        </tr>
                        <tr>
                            <th align="left"> Preço de venda: </th>
                            <td> R$ <input align="left" id="precoVenda" type="text" name="precoVenda" size="10" /></td>
                        </tr>
                    </table>
                    <br>
                    <div style="text-align: center; padding-top: 10px;">
                        <input type="reset" value="LIMPAR" style="height: 40px; width: 105px; font-weight: bold;"/> &nbsp; <input type="submit" value="CADASTRAR" style="height: 40px; width: 120px; font-weight: bold;"/>
                    </div>		   
                </form>
            </fieldset>		
        </div>
        
        <!-- Footer -->
        <?php include "../basicos/Rodape.php" ?>

    </body>
</html>    