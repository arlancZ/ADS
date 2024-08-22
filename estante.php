<?php

class Estante{
    public string $local;
    public string $biblioteca;
    public string $campus;
    public int $corredor;
    public $livro;

    public function __construct($local, $biblioteca, $campus, $corredor){
        $this -> local = $local;
        $this -> biblioteca = $biblioteca;
        $this -> campus = $campus;
        $this -> corredor = $corredor;
        $this -> livro = [];    
    }

    public function __destruct(){
        return;
    }

    public function AddItem(Livro $livro){
        $this-> livro[] = $livro;
    }

    //getters

    public function GetLocal(){
        return $this -> local;
    }

    public function GetBiblioteca(){
        return $this -> biblioteca;
    }

    public function GetCampus(){
        return $this -> campus;
    }

    public function GetCorredor(){
        return $this -> corredor;
    }

    public function GetLivro(){
        return $this -> livro;
    }

    //setters

    public function SetLocal($local){
        $this -> local = $local;
    }

    public function SetBiblioteca($biblioteca){
        $this -> biblioteca = $biblioteca;
    }

    public function SetCampus($campus){
        $this -> campus = $campus;
    }

    public function SetCorredor($corredor){
        $this -> corredor = $corredor;
    }

    public function SetLivro($livro){
        $this -> livro = $livro;
    }
}

?>