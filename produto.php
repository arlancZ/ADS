<?php

class Produto{
    public $codigo;
    public $descricao;
    public $preco;
    public $qntd;
    public $fornecedor;

    public function __construct($codigo, $descricao, $preco, $qntd, $fornecedor){
        $this -> codigo = $codigo;
        $this -> descricao = $descricao;
        $this -> preco = $preco;
        $this -> qntd = $qntd;
        $this -> fornecedor = $fornecedor;    
    }

    public function __destruct(){
        return;
    }

    //getters

    public function GetCodigo(){
        return $this -> codigo;
    }

    public function GetDescricao(){
        return $this -> descricao;
    }

    public function GetPreco(){
        return $this -> preco;
    }

    public function GetQntd(){
        return $this -> qntd;
    }

    public function GetFornecedor(){
        return $this -> fornecedor;
    }

    //setters

    public function SetCodigo($codigo){
        $this -> codigo = $codigo;
    }

    public function SetDescricao($descricao){
        $this -> descricao = $descricao;
    }

    public function SetPreco($preco){
        $this -> preco = $preco;
    }

    public function SetQntd($qntd){
        $this -> qntd = $qntd;
    }

    public function SetFornecedor($fornecedor){
        $this -> fornecedor = $fornecedor;
    }
}

?>