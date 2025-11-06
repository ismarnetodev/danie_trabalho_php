<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM servicos WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<h2>Serviço excluído com sucesso!</h2>";
        echo "<a href='?pg=admin_servicos'>Voltar</a>";
    }else{
        echo "<h2>Erro ao excluir o serviço!</h2>";
        echo "<a href='?pg=admin_servicos'>Voltar</a>";
    }
?>
