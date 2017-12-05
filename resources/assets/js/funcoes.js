// MASCARAS

$(document).ready(function(){
    /* TELEFONE */
    $('.telefone_mascara').mask('(00) 0000-00009');
    /* CPF */
    $('.cpf_mascara').mask('000.000.000-00');  

    /* DATA */
    $('.data_mascara').mask('00/00/0000');

    /* DINHEIRO */
    $('.dinheiro_mascara').mask('000.000.000.000.000,00', {reverse: true});
});

    // FIM MASCARAS