<?php
    
    //Recebe a variável por metodo GET.
    $id = $_GET['id'];
    
     //Requisição ao banco de dados para conexão.
    require ("db.php");

    //Cria uma nova conexão.
    $objetoBD = new db();
    $link = $objetoBD-> mysqlConnect();

    //Query utilizada para deletar a pessoa desejada.
    $queryDelete = "DELETE FROM pessoa WHERE idPessoa='$id';";
    $runQuery = mysqli_query($link,$queryDelete);

    if($runQuery){
        //Redireciona para a tabela novamente.
        header('Location: ../index.php');
        //include ("exibição.php"); 
    }
    else{
        //Exibe erro caso o ocorra.
        echo "Erro ao deletar";
    }
?>