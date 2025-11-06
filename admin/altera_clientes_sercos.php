<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['servico'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];

    $sql = "UPDATE servicos SET
            servico = '$nome',
            categoria = '$categoria',
            preco = '$preco'
            WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "Serviço alterado com sucesso!";
        echo " <a href='?pg=admin_servicos'>Voltar</a>";
    }else{
        echo "Houve um erro na alteração.";
        echo " <a href='?pg=admin_servicos'>Voltar</a>";
    }
?>
