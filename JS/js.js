function deletar(numero) {
    //console.log(" Teste: " + numero);    

    //Redireciona para o PHP responsável por deletar a pessoa desejada da tabela, a variável número corresponde ao id da mesma.
    window.location.href = "bancoDeDados/deletar.php?id="+numero;
    
}
