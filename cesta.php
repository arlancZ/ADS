<?php

class Cesta{
    private $itens = [];

    public function __construct(){
        echo 'Cesta criada com sucesso <br>';
    }

    //Adiciona itens a cesta
    public function AdicionarItem(Produto $produto){
        $this -> itens[] = $produto;
    }

    //Calcula total da cesta
    public function CalculaTotal(){
        $total = 0;
        foreach($this -> itens as $item){
            $total = $item -> GetPreco() * $item -> GetQntd();
        }
        return $total;
    }

    //Exibir lista de produtos
    public function ExibeLista(){
        $lista = " ";
        foreach($this -> itens as $item){
            $lista .= "Produto: " .$item -> GetDescricao();
                        "Preco: " .$item -> GetPreco();
                        "Quantidade: " .$item -> GetQuantidade();
                        "Forncedor: " .$item -> GetFornecedor() -> GetNome(). "<br>\n";
        }
    return $lista;
    }
}

?>