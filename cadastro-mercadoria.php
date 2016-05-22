<?php

require_once('./util/Conexao.class.php');

$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$tipoNegocio = $_POST['tipoNegocio'];

if($tipoNegocio == 'Compra')
    $tipoNegocio = 1;
else
    $tipoNegocio = 2;

$conexao = new Conexao();
$colunas = array('tipo', 'nome', 'quantidade', 'preco', 'tipoNegocio');
$valores = array($tipo, $nome, $quantidade, $preco, $tipoNegocio);

$conexao->insert('tbl_item', $colunas, $valores);

header('Location: itens.php');
?>