<?php
include './header.php';
require_once './util/Conexao.class.php';

$conexao = new Conexao();
$colunas = array('tbl_item.*');
$dados = $conexao->select("tbl_item", $colunas, NULL);
?>
<div class="container" id="conteudo">
    <h1>Itens</h1>
    <table class="table table-striped table-hover table-responsive">
        <thead>
        <td>Código</td>
        <td>Tipo</td>
        <td>Nome</td>
        <td>Quantidade</td>
        <td>Preço</td>
        <td>Tipo de Negócio</td>
        </thead>
        <tbody>
            <?php foreach ($dados as $item): ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['tipo'] ?></td>
                    <td><?php echo $item['nome'] ?></td>
                    <td><?php echo $item['quantidade'] ?></td>
                    <td><?php echo $item['preco'] ?></td>
                    <td><?php
                        if ($item['tipoNegocio'] == 1)
                            echo 'Compra';
                        else
                            echo 'Venda';
                        ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-default">Voltar</a>
</div>
