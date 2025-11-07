<?php

    require_once "config.inc.php";

    $sql = "INSERT INTO servicos (servico, categoria, preco) VALUES (
            '$_POST[servico]', '$_POST[categoria]', '$_POST[preco]')";

    $execute = mysqli_query($conexao, $sql);

    if ($execute) {
        echo "<br><h2>Serviço cadastrado com sucesso!</h2><br>";
        echo "<a href='?pg=admin_servicos'>Voltar</a>";
    } else {
        echo "<h2>Houve um erro ao cadastrar o serviço!</h2><br>";
    }
?>
