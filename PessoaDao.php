<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PessoaDao
 *
 * @author 02158041048
 */
include_once 'Pessoa.php';
include_once 'Conexao.php';

class PessoaDao {


    public static function editar(Pessoa $pessoa) {
        $sql = "UPDATE pessoa SET "
                . " nome = '".$pessoa->getNome(). "',"
                . " cpf = '".$pessoa->getCpf(). "',"
                . " email = '".$pessoa->getEmail(). "',"
                . " bairro = '".$pessoa->getBairro(). "',"
                . " cidade = '".$pessoa->getCidade(). "',"
                . " complemento = '".$pessoa->getComplemento(). "',"
                . " numero = '".$pessoa->getNumero(). "',"
                . " rua = '".$pessoa->getRua(). "',"
                . " telefone  = '".$pessoa->getTelefone(). "'"
                . "WHERE id = ".$pessoa->getId();


        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function inserir(Pessoa $pessoa) {
        $sql = "INSERT INTO pessoa (nome, cpf, email, bairro, cidade, "
                . "complemento, numero, rua, telefone )VALUES "
                . "('" . $pessoa->getNome() . "',"
                . "'" . $pessoa->getCpf() . "',"
                . "'" . $pessoa->getEmail() . "',"
                . "'" . $pessoa->getBairro() . "',"
                . "'" . $pessoa->getCidade() . "',"
                . "'" . $pessoa->getComplemento() . "',"
                . "'" . $pessoa->getNumero() . "',"
                . "'" . $pessoa->getRua() . "',"
                . "'" . $pessoa->getTelefone() . "');";



        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getPessoas() {
        $sql = "SELECT * FROM pessoa ORDER BY nome ";
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();

        while (list($id, $nome, $cpf, $email,
        $bairro, $cidade,
        $complemento, $numero,
        $rua, $telefone) = mysqli_fetch_row($result)) {

            $pessoa = new Pessoa();
            $pessoa->setId($id);
            $pessoa->setNome($nome);
            $pessoa->setCpf($cpf);
            $pessoa->setEmail($email);
            $pessoa->setBairro($bairro);
            $pessoa->setCidade($cidade);
            $pessoa->setComplemento($complemento);
            $pessoa->setNumero($numero);
            $pessoa->setRua($rua);
            $pessoa->setTelefone($telefone);
            $lista->append($pessoa);
        }

        //var_dump($lista);
        return $lista;
    }

    public static function excluir($pessoa){
        $sql = "DELETE FROM" ." pessoa WHERE id = ".$pessoa->getId();

        $conn = new Conexao();
        $retorno = $conn->executar( $sql );
        return $retorno;
    }

    public static function getPessoaById ($idPessoa){
        $sql = "SELECT * FROM pessoa WHERE pessoa.id =".$idPessoa;
        $conn = new Conexao();
        $result = $conn->executar($sql);
        list($id, $nome, $cpf, $email, $bairro, $cidade, $complemento, $numero, $rua, $telefone) = mysqli_fetch_row($result);

            $pessoa = new Pessoa();
            $pessoa->setId($id);
            $pessoa->setNome($nome);
            $pessoa->setCpf($cpf);
            $pessoa->setEmail($email);
            $pessoa->setBairro($bairro);
            $pessoa->setCidade($cidade);
            $pessoa->setComplemento($complemento);
            $pessoa->setNumero($numero);
            $pessoa->setRua($rua);
            $pessoa->setTelefone($telefone);
            
            return $pessoa;
    }

}

    