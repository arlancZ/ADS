<?php

class Livro{
    public string $nome;
    public int $codigo;
    public string $autor;
    public int $editora;

    public function __construct($nome, $codigo, $autor, $editora){
        $this -> nome = $nome;
        $this -> $codigo;
        $this -> autor = $autor;
        $this -> editora = $editora;  
    }

    public function __destruct(){
        return;
    }

    

    //getters

    public function GetNome(){
        return $this -> nome;
    }

    public function GetCodigo(){
        return $this -> codigo;
    }

    public function GetAutor(){
        return $this -> autor;
    }

    public function GetEditora(){
        return $this -> editora;
    }

    //setters

    public function SetNome($nome){
        $this -> nome = $nome;
    }

    public function SetCodigo($codigo){
        $this -> codigo = $codigo;
    }

    public function SetAutor($autor){
        $this -> autor = $autor;
    }

    public function SetEditora($editora){
        $this -> editora = $editora;
    }
}

?>