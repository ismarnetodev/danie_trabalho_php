<p>
    <a href="?pg=form_servicos">Cadastrar novo serviço</a>
</p>

<h2>Lista de Serviços</h2>
<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM servicos ";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado)) {

            echo "<br>===============<br>";
            echo "Id do Serviço: $dados[id] | ";
            echo "Nome do Serviço: $dados[servico] | ";
            echo "Categoria: $dados[categoria] | ";
            echo "Preço: R$ $dados[preco] ";
            echo " | <a href='?pg=form_servicos_alterar&id=$dados[id]'>Alterar</a>";
            echo " | <a href='?pg=delete_servico&id=$dados[id]'>Excluir</a>";
            echo "<br>============= <br>";
        }
    } else {
        echo "<br><h2>Nenhum serviço encontrado!</h2><br>";
    }
?>
