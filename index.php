<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        include_once './PessoaDao.php';
        $nome = ""; $cpf = ""; $email = "";
        $telefone = ""; $rua = ""; $numero = "";
        $bairro = ""; $cidade = ""; $complemento ="";
        $action = "inserir";

        if(isset($_REQUEST['editar'])){
            $idPessoa = $_REQUEST['idPessoa'];

            $pessoa = PessoaDao::getPessoaById($idPessoa);

            $nome = $pessoa->getNome();
            $telefone = $pessoa->getTelefone();
            $email = $pessoa->getEmail();
            $cpf = $pessoa->getCpf();
            $cidade = $pessoa->getCidade();
            $rua = $pessoa->getRua();
            $numero = $pessoa->getNumero();
            $complemento = $pessoa->getComplemento();
            $bairro = $pessoa->getBairro();
            $action = "editar&idPessoa=". $idPessoa;
            
        }
        ?>
        <form action="controller/PessoaController.php?<?php echo $action; ?>"


        <form action="controller/PessoaController.php?inserir"
              method="post"
              id="idFrmPessoa">

            <br/> <label> Nome </label> 
            <input type="text" id="txNome" name="txNome" value="<?= $nome?>">
            <br/> <label> CPF </label>
            <input type="number" id="txCpf" name="txCpf" value="<?= $cpf?>">
            <br/> <label> E-mail </label>
            <input type="email" id="txEmail" name="txEmail" value="<?= $email?>">
            <br/> <label> Telefone </label>
            <input type="number" id="txFone" name="txFone" value="<?= $telefone?>">
            <br/> <label> Endereço </label> <br/>
            Rua: <input type="text" id="txRua" name="txRua" value="<?= $rua?>">
            Numero: <input type="number" id="txNumero" name="txNumero" value="<?= $numero?>">
            Complemento: <input type="text" id="txComp" name="txComp" value="<?= $complemento?>">
            <br/> Bairro: <input type="text" id="txBairro" name="txBairro" value="<?= $bairro?>">
            <br/> Cidade: <input type="text" id="txCidade" name="txCidade" value="<?= $cidade?>">

            <input type="submit" id="btnEnviar" name="btnEnviar"/>
            <input type="reset" id="btnLimpar" name="btnLimpar"/>



        </form>

        <?php
       // if (isset($_REQUEST['exibir'])) {
            ?>
            <table border="1">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Rua</th>
                    <th>Numero</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                include_once './PessoaDao.php';
                $lista = PessoaDao::getPessoas();
                foreach ($lista as $pessoa) { ?>

                <tr>
                     <td> <?= $pessoa->getId() ?></td>
                     <td> <?= $pessoa->getNome() ?></td>
                     <td> <?= $pessoa->getCpf() ?></td>
                     <td> <?= $pessoa->getEmail() ?></td>
                     <td> <?= $pessoa->getTelefone() ?></td>
                     <td> <?= $pessoa->getRua() ?></td>
                     <td> <?= $pessoa->getNumero() ?></td>
                     <td> <?= $pessoa->getComplemento() ?></td>
                     <td> <?= $pessoa->getBairro() ?></td>
                     <td> <?= $pessoa->getCidade() ?></td>
                     <td> <a href="index.php?editar&idPessoa=<?=$pessoa->getId(); ?>">Editar</a>
                     <td> <a href="controller/PessoaController.php?excluir&idPessoa=<?=$pessoa->getId(); ?>">Excluir</a>
                 </tr>

                <?php
                }
                ?>
            </table>
        <?php
        //}
        ?>
    </body>
</html>
