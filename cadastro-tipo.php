<?php
require_once('./util/Conexao.class.php');

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$conexao = new Conexao();
/*
$colunas = array('tbl_tipo.*');
$dados = $conexao->select('tbl_tipo', $colunas, "nome = " . $nome);

if (count($dados) > 0):
    include './header.php';
    ?>
    <div class="container">
        <h1>O Nome do tipo já existe ! Insira outro.</h1>
        <a href='adicionar-tipo.php' class="btn btn-danger">Voltar</a>
    </div>
    <?php
else:
 * 
 */
    $colunas = array('nome', 'descricao');
    $valores = array($nome, $descricao);

    $conexao->insert('tbl_tipo', $colunas, $valores);

    header('Location: index.php');
//endif;
?>