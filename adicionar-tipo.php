<?php
include './header.php';
?>
<div class="container" id="conteudo">
    <div class="row">
        <div class="col-md-6">
            <h1>Cadastrar Tipo</h1>
            <form method="post" id="form" action="cadastro-tipo.php">
                <div class="form-group">
                    <label>Nome</label>
                    <input title="Nome" type="text" class="form-control" name="nome">
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <input title="Descrição" type="text" class="form-control" name="descricao">
                </div>
                <input type="submit" class="btn btn-default" value="Adicionar" id="btnAdd" title="Adicionar Tipo" >
                <a href="index.php" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>
</div>