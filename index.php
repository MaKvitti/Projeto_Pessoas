<?php
        //Requisição ao banco de dados para conexão.
        require ("bancoDeDados/db.php");

        //Cria uma nova conexão.  
        $objetoBD = new db();
        $link = $objetoBD-> mysqlConnect();

        //Query utilizada para selecionar toda a tabela.
        $selectTabelaPessoa = "SELECT idPessoa,nomePessoa,idadePessoa FROM pessoa ORDER BY idPessoa";
        $id = 'idPessoa';
        $nome = 'nomePessoa';
        $idade = 'idadePessoa';

        //Variável que guarda o resultado da busca e verifica se ocorre erro.
        $resultadoSelectPessoa = mysqli_query($link, $selectTabelaPessoa) or die("Erro ao retornar dados");
        
?>

<!DOCTYPE html>
<html lang ='pt-br'>
    <head>
        <meta charset="UTF-8" />
        <title>Tabela de Pessoas</title>
        <script src="JS/js.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="CSS/css.css" >

    </head>
    <body >
        <div class ="container">  
            <div id='resultado' >
                <table class = "table table-striped ">
                    <thead class="tabela-cabecalho texte"> 
                        <tr class="fw-bold" >
                            <th class="col-id">#ID</th>
                            <th class="col-nome">NOME</th>
                            <th class="col-idade">IDADE</th>
                            <th class="col-botao"></th>
                        </tr>
                    </thead>
                    <?php
                        //While rodará até não existir mais linhas no banco de dados.
                        while($busca = mysqli_fetch_array($resultadoSelectPessoa))  
                        {
                            echo "<tr><td class='fw-bold' >".$busca[$id]."</td>";
                            echo "<td>".$busca[$nome]."</td>";
                            echo "<td>".$busca[$idade]."</td>";
                            //Botão possui uma função onclick que passará o parâmetro para o js realizar o metodo GET.
                            echo "<td><button onclick='deletar(".$busca[$id].")' class='btn btn-danger' > Deletar </button></td></tr>";
                                
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>