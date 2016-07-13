<?php

class Produtos {
    private $codigo;
    private $descricao;
    private $qtdEstoque;
    private $venda;
    private $categoria;
    private $custo;
    
    function getCodigo() {
        return $this->codigo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getQtdEstoque() {
        return $this->qtdEstoque;
    }

    function getVenda() {
        return $this->venda;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getCusto() {
        return $this->custo;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setQtdEstoque($qtdEstoque) {
        $this->qtdEstoque = $qtdEstoque;
    }

    function setVenda($venda) {
        $this->venda = $venda;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setCusto($custo) {
        $this->custo = $custo;
    }


}
