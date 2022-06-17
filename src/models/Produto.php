<?php 

class Produto {
    private $codigo;
    private $nome;
    private $peso;
    private $preco;
    private $valorCompra;
    private $valorVenda;
    private $fornecedor;
    private $imagem;

    public function getCodigo() {
        return $this->codigo;
    }
    
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;

        return $this;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;

        return $this;
    }

    public function cadastrarProduto() {

    }

    public function listarProduto() {

    }

    public function listrarProdutos() {
        
    }
    
    public function getValorCompra() {
        return $this->valorCompra;
    }

    public function setValorCompra($valorCompra) {
        $this->valorCompra = $valorCompra;

        return $this;
    }

    public function getValorVenda() {
        return $this->valorVenda;
    }


    public function setValorVenda($valorVenda) {
        $this->valorVenda = $valorVenda;

        return $this;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;

        return $this;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;

        return $this;
    }
}