<?php

    class Anuncio {
        private $id_anuncio;
        private $preco_anuncio;
        private $descricao;
        private $data_publicacao;
        private $contato_vendedor;
        private $cor;
        private $ano;
        private $km_rodada;
        private $modificado;
        private $localizacao;
        private $aceita_troca;
        private $final_placa;
        private $capacidade_bateria;
        private $usuario_id;
        private $carro_id;

        public function setId_anuncio($id_anuncio) {
            $this->id_anuncio = $id_anuncio;
        }

        public function getId_anuncio() {
            return $this->id_anuncio;
        }

        public function setPreco_anuncio($preco_anuncio) {
            $this->preco_anuncio = $preco_anuncio;
        }

        public function getPreco_anuncio() {
            return $this->preco_anuncio;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setData_publicacao($data_publicacao) {
            $this->data_publicacao = $data_publicacao;
        }

        public function getData_publicacao() {
            return $this->data_publicacao;
        }

        public function setContato_vendedor($contato_vendedor) {
            $this->contato_vendedor = $contato_vendedor;
        }

        public function getContato_vendedor() {
            return $this->contato_vendedor;
        }

        public function setCor($cor) {
            $this->cor = $cor;
        }

        public function getCor() {
            return $this->cor;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function getAno() {
            return $this->ano;
        }

        public function setKm_rodada($km_rodada) {
            $this->km_rodada = $km_rodada;
        }

        public function getKm_rodada() {
            return $this->km_rodada;
        }

        public function setModificado($modificado) {
            $this->modificado = $modificado;
        }

        public function getModificado() {
            return $this->modificado;
        }

        public function setLocalizacao($localizacao) {
            $this->localizacao = $localizacao;
        }

        public function getLocalizacao() {
            return $this->localizacao;
        }

        public function setAceita_troca($aceita_troca) {
            $this->aceita_troca = $aceita_troca;
        }

        public function getAceita_troca() {
            return $this->aceita_troca;
        }

        public function setFinal_placa($final_placa) {
            $this->final_placa = $final_placa;
        }

        public function getFinal_placa() {
            return $this->final_placa;
        }

        public function setCapacidade_bateria($capacidade_bateria) {
            $this->capacidade_bateria = $capacidade_bateria;
        }

        public function getCapacidade_bateria() {
            return $this->capacidade_bateria;
        }

        public function setUsuario_id($usuario_id) {
            $this->usuario_id = $usuario_id;
        }

        public function getUsuario_id() {
            return $this->usuario_id;
        }

        public function setCarro_id($carro_id) {
            $this->carro_id = $carro_id;
        }

        public function getCarro_id() {
            return $this->carro_id;
        }

    }

?>