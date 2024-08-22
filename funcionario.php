<?php

class Funcionario
{
    private int $codigo;
    public string $nome;
    public int $setor;
    public $dataAdimissao;
    public $regime;
    public float $salario;
    public $dependente;

    public function __construct($codigo, $nome, $setor, $dataAdimissao, $regime, $salario)
    {
        $this-> codigo = $codigo;
        $this-> nome = $nome;
        $this-> setor = $setor;
        $this-> dataAdimissao = $dataAdimissao;
        $this-> regime = $regime; 
        $this-> salario = $salario;

        $this-> dependente = new Dependente();
    }public function __destruct()
    {
        return;
    }


    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSetor() {
        return $this->setor;
    }

    public function getDataAdimissao() {
        return $this->dataAdimissao;
    }

    public function getRegume() {
        return $this->regime;
    }

    public function getSetor() {
        return $this->setor;
    }


        
    



    public function setCodigo($codigo) {
        return $this->codigo = $codigo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSetor($setor) {
        $this->setor =$setor;
    }

}
?>