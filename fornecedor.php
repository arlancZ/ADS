<?php

class Fornecedor{
    private $codigo;
    public $nome;
    protected $razaosocial;

    public function __construct($codigo, $nome, $razaosocial){
        $this -> codigo = $codigo;
        $this -> nome = $nome;
        $this -> razaosocial = $razaosocial;
    }

    public function __destruct(){
        return;
    }

    public function GetCodigo(){
        return $this -> codigo;
    }

    public function GetNome(){
        return $this -> nome;
    }

    public function GetRazaoSocial(){
        return $this -> razaosocial;
    }

    public function SetCodigo($codigo){
        $this -> codigo = $codigo;
    }

    public function SetNome($nome){
        $this -> nome = $nome;
    }

    public function SetRazaoSocial($razaosocial){
        $this -> razaosocial = $razaosocial;
    }
 
}


?>