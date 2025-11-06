<?php
    require_once "config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM servicos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($servico = mysqli_fetch_array($resultado)){
        $id = $servico['id'];
        $nome = $servico['servico'];
        $categoria = $servico['categoria'];
        $preco = $servico['preco'];
    }
?>

<form action="?pg=altera_servicos" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome do serviço:</label>
    <input type="text" name="servico" value="<?=$nome?>">
    <label>Categoria:</label>
    <input type="text" name="categoria" value="<?=$categoria?>">
    <label>Preço:</label>
    <input type="text" name="preco" value="<?=$preco?>">
    <input type="submit" value="Salvar Alterações">
</form>
