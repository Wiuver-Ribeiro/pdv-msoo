<?php

class Categoria {
    private $codigoCategoria;
    private $nome;
    private $quantidadeProdutos;
    private $imagemProduto;

    public function cadastrarCategoria() {}

    public function listarCategorias() {}

    public function excluirCategoria() {}

    public function getCodigoCategoria() {
        return $this->codigoCategoria;
    }

    public function setCodigoCategoria($codigoCategoria) {
        $this->codigoCategoria = $codigoCategoria;

        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;

        return $this;
    }

    public function getQuantidadeProdutos() {
        return $this->quantidadeProdutos;
    }

    public function setQuantidadeProdutos($quantidadeProdutos) {
        $this->quantidadeProdutos = $quantidadeProdutos;

        return $this;
    }

    public function getImagemProduto() {
        return $this->imagemProduto;
    }

    public function setImagemProduto($imagemProduto) {
        $this->imagemProduto = $imagemProduto;

        return $this;
    }
}