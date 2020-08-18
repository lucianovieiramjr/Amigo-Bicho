<!DOCTYPE html>
<html>
    <head>    
        <title>AMIGO BICHO: Pesquisar Funcionário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/W3.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/aba.css" rel="stylesheet" type="text/css"/>

        <script src="../js/clima.js" type="text/javascript"></script>
        <script src="../js/relogio.js" type="text/javascript"></script>
        <script src="../js/Batata.js" type="text/javascript"></script>
        <script src="../js/aba.js" type="text/javascript"></script>
        <script src="../js/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="../js/jquery.mask.min.js" type="text/javascript"></script>
        <script src="../js/mascaras.js" type="text/javascript"></script>
        
        <!-- SCRIPT PARA MUDAR A MÁSCARA DO INPUT QUANDO SELECIONAR TELEFONE FIXO OU
             TELEFONE CELULAR NO FORMULÁRIO -->
        <script type="text/javascript">
            $(document).ready(function () {
                $('.telefoneCelular').mask('(00)00000-0000');
                $('.telefoneFixo').mask('(00)0000-0000');
                if (document.getElementById("telCelular").checked){
                    document.getElementById("formTelefone").action = "../basicos/Rodape.php";
                    document.getElementById("telefoneFuncionario").class = "telefoneCelular";
                } else {
                    document.getElementById("formTelefone").action = "../basicos/Cabecalho.php";
                    document.getElementById("telefoneFuncionario").class = "telefoneFixo";
                }
            });
        </script>
        <style>
            .inputPesquisa, #telefoneFuncionario{height: 45px; font-weight: bold; font-size: 120%;}
            button{ font-size: 150%;}
            table{margin: 0 auto;}
        </style>
    </head>
    <body class="div1" onload="mascaras(), horarioRodape(), clima()">
        <!-- Navbar -->
        <?php include "../basicos/Navbar.php" ?>

        <!-- Page Content -->
        <div class="w3-padding-large" id="main">
            <!-- Header/Home -->
            <?php include "../basicos/Cabecalho.php" ?>


            <div style="margin: 0 auto; width: 75%; margin-top: 5%">
                <div id="divFora">
                    <div id="divPesquisaNome"> 
                        <center>
                            <div style="padding-bottom: 20px;">
                                <form method="post" action="ResultadoPesquisaNomeFuncionario.php">
                                    <br><input class="inputPesquisa" align="left" type="text" name="nomeFuncionario" size="50" required placeholder="Insira aqui o nome do funcionário">
                                    <button title="Pesquisar" type="submit" class="fa fa-search" style="height: 45px; width: 55px; font-size:120%"></button>
                                </form>
                            </div>
                        </center>
                    </div>
                    <div id="divPesquisaEmail"> 
                        <center>
                            <div style="padding-bottom: 20px;">
                                <form method="post" action="ResultadoPesquisaEmailFuncionario.php">
                                    <br><input class="inputPesquisa" align="left" type="text" name="emailFuncionario" size="50" required placeholder="Insira aqui o e-mail do funcionário">
                                    <button title="Pesquisar" type="submit" class="fa fa-search" style="height: 45px; width: 55px; font-size:120%"></button>
                                </form>
                            </div>
                        </center>				
                    </div>
                    <div id="divPesquisaTelefone"> 
                        <center>
                            <div style="padding-bottom: 20px;">
                                <form method="post" action="" id="formTelefone">
                                    <table id="tableTelefone">
                                        <tr>
                                            <th> Selecione o tipo de telefone: </th>
                                            <td> <input checked type="radio" id="telFixo" name="tipoTelefone" value="1"> </td>
                                            <td> <label for="telFixo"> Telefone Fixo</label> </td> &nbsp;
                                            <td> <input  type="radio" id="telCelular" name="tipoTelefone" value="2"> </td>
                                            <td> <label for="telCelular"> Telefone Celular</label> </td>
                                        </tr>
                                    </table>
                                    <br><input id="telefoneFuncionario" class="telefoneFixo" align="left" type="text" name="telefoneFuncionario" size="50" required placeholder="Insira aqui o telefone do funcionário">
                                    <button title="Pesquisar" type="submit" class="fa fa-search" style="height: 45px; width: 55px; font-size:120%"></button>
                                </form>
                                <span>
                                    - Colocar as opções de telefone fixo e celular e pesquisar o tipo de telefone que tiver selecionado, daí muda a máscara do input
                                </span>
                            </div>
                        </center>
                    </div>
                </div>

                <script>
                    var aba = new JTabControl("divFora", 500, 300);

                    aba.addTab("divPesquisaNome", "&nbsp; PESQUISAR POR NOME &nbsp;");
                    aba.addTab("divPesquisaEmail", "&nbsp; PESQUISAR POR E-MAIL &nbsp;");
                    aba.addTab("divPesquisaTelefone", "&nbsp; PESQUISAR POR TELEFONE &nbsp;");
                </script>
            </div>

        </div>
        
        <!-- Footer -->
        <?php include "../basicos/Rodape.php"  ?>

    </body>
</html>    