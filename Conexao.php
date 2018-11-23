<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Conexao {

    private function abrir() {
        $local = "localhost";
        $banco = "loja";
        $usuario = "root";
        $senha = "";
        $conn = mysqli_connect($local, $usuario, $senha, $banco);
        return $conn;
    }

    public function executar($sql) {
        $conn = $this->abrir();
        if ($conn != NULL) {
            $retorno = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $retorno;
        } else {
            return NULL;
        }
    }
    
     public function executarComRetornoId( $sql ){
        $conn = $this->abrir();
        if( $conn != NULL ){
            mysqli_query($conn, $sql);
            $id = mysqli_insert_id( $conn );
            mysqli_close( $conn );
            return $id;
        }  else {
            return NULL;
        }
    }

}
