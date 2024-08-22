<?php

class Dependente
{
    private $codigo;
    private $nome;
    private $parentesco;

    public function __construct($codigo, $nome, $parentesco) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->parentesco = $parentesco;
    }

    public function __destruct()
    {
        echo "Ja era....";
    }

    // Getters
    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getParentesco() {
        return $this->parentesco;
    }
    // Setters
    public function setCodigo($codigo) {
        return $this->codigo = $codigo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }
}
?>
