<!DOCTYPE html>
<html>
    <head>    
        <title>AMIGO BICHO: Cadastrar Funcionário</title>
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
            input, td, th{height: 40px; padding: 5px}
            table{margin: 0 auto}
            th{background-color: #bfbfbf; width: 145px} 
            .thData{width: 200px} 
            .thSenha{width: 170px}
            .dadosLogin{font-size: 130%; width: 255px}
            .senha{font-size: 150%}
            .thTitulo{width: 950px; letter-spacing: 2px; border-bottom: 3px solid; background-color: #e1e1d0; font-size: 120%}
            td{background-color: #e6e6e6}
            .spanCEP{font-weight: bold; font-size: 80%}
            
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
                Você está em: 
                <a href='../basicos/Home.php' title='Página inicial'>HOME</a>                
                >>
                <a href='../funcionarios/Funcionarios.php' title='Funcionários'>FUNCIONÁRIOS</a>
                >>
                <a class="links" href="../funcionarios/Funcionarios_Cadastrar.php"></a>
            </div>


            <fieldset style="border: 0; width: 88%; margin: 0 auto;">
                <form method="post" action="guarda_func.php"  oninput="login.value = cpf.value">
                    <table border="0" style="padding-bottom: 10px;">
                        <tr>
                            <th align="center" class="thTitulo"> CADASTRO DE FUNCIONÁRIO</th>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <th align="left" colspan="4"> DADOS PESSOAIS: </th>
                        </tr>
                        <tr>
                            <th align="left"> Nome:  &nbsp; </th>
                            <td colspan="3"><input align="left" type="text" name="nomeFuncionario" size="78" required placeholder="Nome do funcionário"></td>
                        </tr>
                        <tr>
                            <th align="left"> CPF:  &nbsp; </th>
                            <td><input align="left" type="text" class="cpf" name="cpf" size="28" required placeholder="xxx.xxx.xxx-xx"/></td>
                            <th align="left" class="thData"> &nbsp; Data de nascimento:  &nbsp; </th>
                            <td><input align="left" type="date" name="dataNascimento" size="10" required /></td>
                        </tr>
                        <tr>
                            <th align="left"> E-mail: </th>
                            <td colspan="3"><input align="left" type="email" name="emailFuncionario" size="78" required placeholder="E-mail do funcionário"/></td>
                        </tr>
                        <tr>
                            <th align="left" rowspan="5"> Endereço: </th>
                        </tr>   
                        <tr>
                            <td colspan="3" style="text-align: center">
                                <label> &nbsp; Insira o <b>CEP</b> do funcionário: &nbsp;
                                    <input align="left" type="text" id="cep" name="cepEndereco" size="20" placeholder="CEP" onblur="pesquisacep(this.value);"/>
                                </label>
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
                                    <option value="AC">AC</option>
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
                    <table>
                        <tr>
                            <th align="left"> Telefone celular: &nbsp;</th>
                            <td>
                                <input align="left" type="text" id="telefoneCelularFuncionario" name="telefoneCelularFuncionario" size="27" required placeholder="Telefone celular"/>
                            </td>				
                            <th align="left">  &nbsp; Telefone fixo:  &nbsp; </th>
                            <td>
                                <input align="left" type="text" id="telefoneFixoFuncionario" name="telefoneFixoFuncionario" size="26" placeholder="Telefone fixo"/>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table border="0">
                        <tr>
                            <th align="left" colspan="4"> DADOS PROFISSIONAIS: </th>
                        </tr>
                        <tr>
                            <th align="left"> Cargo: </th>
                            <td colspan="3"><input align="left" type="text" name="cargo" size="78" required placeholder="Cargo do funcionário"/></td>
                        </tr>
                        <tr>
                            <th align="left"> Salário: </th>
                            <td> <b>R$ </b><input align="left" id="salario" type="text" name="salario" size="25" placeholder="Salário do funcionário"/></td>
                            <th align="left" class="thData"> &nbsp;Data de admissão: </th>
                            <td><input align="left" type="date" name="dataAdmissao" size="10" required /></td>                              
                        </tr>
                        <tr>
                            <th align="left"> Formação: </th>
                            <td colspan="3"><input align="left" type="text" name="formacao" size="78" placeholder="Formação do funcionário"/></td>
                        </tr>
                    </table>
                    <br>
                    <table border="0">
                        <tr>
                            <th align="left" colspan="4"> INFORMAÇÕES DE USUÁRIO: </th>
                        </tr>
                        <tr>
                            <th align="left" style="width: 140px"> Login: </th>
                            <td class="dadosLogin"><output name="login" for="cpf"></output></td>
                            <th align="left" class="thSenha"> &nbsp;Senha: </th>
                            <td>
                                <input id="pass" class="senha" align="left" type="password" name="senha" size="15" title="Digite uma senha de, no mínimo, 6(seis) caracteres" required></input>
                                <span style="left: 0;" id="olho" class="fa fa-eye" title="Mostrar senha" onclick="abreFechaOlhinho()"></span>

                            </td>
                        </tr>
                    </table>   
                    <br>
                    <div style="text-align: center; padding-top: 10px;">
                        <input title="Limpar campos" type="reset" value="LIMPAR" style="height: 40px; width: 105px; font-weight: bold;"/>
                        &nbsp; 
                        <button title="Cadastrar dados" onclick="confirmarSenha()" style="height: 40px; width: 120px; font-weight: bold;"> CADASTRAR </button>
                    </div>
                    <p>
                        - Colocar um alert pra confirmar a senha. Se for igual, show. Se não, não cadastra; <br>
                        - A senha tem que ter 6 caracteres no mínimo, <br>
                        - Verificar se já existe o CPF no banco de dados.
                        <br>
                    </p>
                </form>
            </fieldset>		
        </div>
        <!-- Footer -->
            <?php include "../basicos/Rodape.php" ?>
        
    </body>
</html>    