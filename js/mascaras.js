function mascaras() {
    // Máscara para o campo "CPF" da página 'index.php' 
    $('#user').mask('000.000.000-00');

    // Máscaras para os campos dos formulários de FUNCIONÁRIOS
    $('#telefoneCelularFuncionario').mask('(00)00000-0000');
    $('.telefoneCelular').mask('(00)0000-0000');
    $('#telefoneFixoFuncionario').mask('(00)0000-0000');
    $('.telefoneFixo').mask('(00)0000-0000');
    $('.cpf').mask('000.000.000-00');
    $('#salario').mask('000.000,00', {reverse: true});
    $('#data').mask('00/00/0000');
    $('#cep').mask('00000-000');

    // Máscaras para os campos dos formulários de FORNECEDORES
    $('#telefoneCelularFornecedor').mask('(00)00000-0000');
    $('#telefoneFixoFornecedor').mask('(00)0000-0000');
    $('#cnpj').mask('00.000.000/0000-00');
    $('#inscricaoEstadual').mask('00.000.00-0');
    $('#cep').mask('00000-000');

    // Máscaras para os campos dos formulários de PRODUTO
    $('#precoVenda').mask('000.000.000.000.000,00', {reverse: true});
    $('#precoCusto').mask('000.000.000.000.000,00', {reverse: true});
}
