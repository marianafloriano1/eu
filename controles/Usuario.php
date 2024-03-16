<?php

include_once 'Conectar.php';

class Usuario {

    private $id;
    private $Nome;
    private $senha;
    private $con;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function consultar() {
        $this->con = new Conectar();
        $sql = "SELECT * FROM usuario WHERE Nome = ? AND senha = ?;";
        $executar = $this->con->prepare($sql);
        $executar->bindValue(1, $this->Nome);
        $executar->bindValue(2, sha1($this->senha));
        
        return $executar->execute() == 1 ? $executar->fetchColumn() : false ;
    }

}
