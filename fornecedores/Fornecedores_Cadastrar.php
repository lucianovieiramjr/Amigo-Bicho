<!DOCTYPE html>
<html>
    <head>    
        <title>AMIGO BICHO: Cadastrar Fornecedor</title>
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
        <script src="../js/buscaCep.js"></script>       
        <script src="../js/Batata.js"></script>
        <script src="../js/abreFechaOlhinho.js" type="text/javascript"></script>
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
            
            <fieldset style="border: 0; width: 88%; margin: 0 auto;">
                <form method="post" action="guarda_forn.php">
                    <table border="0" style="padding-bottom: 10px;">
                        <tr>
                            <th align="center" class="thTitulo"> CADASTRO DE FORNECEDOR </th>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <th align="left" colspan="4"> DADOS PESSOAIS: </th>
                        </tr>
                        <tr>
                            <th align="left"> CNPJ:  &nbsp; </th>
                            <td><input align="left" type="text" id="cnpj" name="cnpj" size="25" required placeholder="xx.xxx.xxx/xxxx-xx"/></td>
                            <th align="left" class="thInscEst"> &nbsp; Inscrição Estadual: </th>
                            <td><input align="left" type="text" id="inscricaoEstadual" name="inscricaoEstadual" size="25" required placeholder="xx.xxx.xx-x"/></td>
                        </tr>
                        <tr>
                            <th align="left"> Nome fantasia:  &nbsp; </th>
                            <td colspan="3"><input align="left" type="text" name="nomeFantasia" size="78" required placeholder="Nome fantasia do fornecedor"></td>
                        </tr>
                        <tr>
                            <th align="left"> Razão social:  &nbsp; </th>
                            <td colspan="3"><input align="left" type="text" name="razaoSocial" size="78" required placeholder="Razão social do fornecedor"></td>
                        </tr>
                        <tr>
                            <th align="left" rowspan="5"> Endereço: </th>
                        </tr>   
                        <tr>
                            <td colspan="3" style="text-align: center"><label> &nbsp; Insira o <b>CEP</b> do fornecedor: &nbsp;
                                    <input align="left" type="text" id="cep" name="cepEndereco" size="20" placeholder="CEP" onblur="pesquisacep(this.value);"/></label>
                                <span class="spanCEP"><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCep.cfm" target="_blank" style="text-decoration: none;">Não sei o CEP</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><input align="left" type="text" id="logradouro" name="logradouroEndereco" size="67" required placeholder="Logradouro"/>&nbsp;<input align="left" type="tel" name="numeroEndereco" size="5" required placeholder="Número"/></td>
                        </tr>
                        <tr>
                            <td colspan="3"><input align="left" type="text" id="bairro" name="bairroEndereco" size="30" required placeholder="Bairro"/>&nbsp;
                                <input align="left" type="text" id="cidade" name="cidadeEndereco" size="31" required placeholder="Cidade"/>&nbsp;
                                <select id="uf" name="estadoEndereco" style="width:76px; height:40px;">
                                    <option value="" disabled selected>UF</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="RS">RS</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><input align="left" type="text" name="complementoEndereco" size="78" placeholder="Complemento"/></td>
                        </tr>
                    </table>
                    <br>
                    <table border="0">
                        <tr>
                            <th align="left" colspan="4"> DADOS DE CONTATO: </th>
                        </tr>
                        <tr>
                            <th align="left"> E-mail: </th>
                            <td colspan="3"><input align="left" type="email" name="emailFornecedor" size="78" required placeholder="E-mail do fornecedor"/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th align="left"> Telefone fixo:  &nbsp; </th>
                            <td>
                                <input align="left" type="text" id="telefoneFixoFornecedor" name="telefoneFixoFornecedor" size="26" required placeholder="Telefone fixo do fornecedor"/>
                            </td>
                            <th align="left"> Telefone celular: &nbsp;</th>
                            <td>
                                <input align="left" type="text" id="telefoneCelularFornecedor" name="telefoneCelularFornecedor" size="27" required placeholder="Telefone celular do fornecedor"/>
                            </td>					
                        </tr>
                    </table>
                    <br>
                    <div style="text-align: center; padding-top: 10px;">
                        <input title="Limpar campos" type="reset" value="LIMPAR" style="height: 40px; width: 105px; font-weight: bold;"/> &nbsp; <input title="Cadastrar dados" type="submit" value="CADASTRAR" style="height: 40px; width: 120px; font-weight: bold;"/>
                    </div>

                </form>
            </fieldset>
        </div>
        
        <!-- Footer -->
        <?php include "../basicos/Rodape.php"  ?>
        
    </body>
</html>    