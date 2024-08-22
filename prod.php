<?php 

 class Produto
 {
    public int $codigo;
    public string $descrição;
    public float $preco;
    public int $quantidade;
    public  $fornecedor;

    public function __construct($codigo, $descrição, $preco, $quantidade)
    {
        $this->codigo->$codigo;
        $this->descrição->$descrição;
        $this->preco->$preco;
        $this->quantidade->$quantidade;
    }
 }


 class Fornecedor
 {
    public int $codigo;
    public string $razao;
    public string $endereco;
    public string $cidade;

    public function __construct($codigo, $razao, $endereco, $cidade)
    {
        $this->codigo->$codigo;
        $this->razao->$razao;
        $this->endereco->$endereco;
        $this->cidade->$cidade;
    }
}




$fornecedor = new Fornecedor(
    848,
    "Bom gosto alimentos LTDA",
    "rua Ipiranga",
    "Poços de Caldas"
);
/*
$produto = new Produto(
    
)*/