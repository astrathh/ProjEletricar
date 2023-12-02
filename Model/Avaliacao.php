<?php
    private $id_avaliacao;
    private $nota;
    private $texto;
    private $avaliador_id;
    private $anuncio_id;

    public function setId_avaliacao($id_avaliacao) {
        $this->id_avaliacao = $id_avaliacao;
    }

    public function getId_avaliacao() {
        return $this->id_anuncio;
    }
    /**
     * Get the value of nota
     */ 
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     *
     * @return  self
     */ 
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get the value of texto
     */ 
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get the value of avaliador_id
     */ 
    public function getAvaliador_id()
    {
        return $this->avaliador_id;
    }

    /**
     * Set the value of avaliador_id
     *
     * @return  self
     */ 
    public function setAvaliador_id($avaliador_id)
    {
        $this->avaliador_id = $avaliador_id;

        return $this;
    }

    /**
     * Get the value of anuncio_id
     */ 
    public function getAnuncio_id()
    {
        return $this->anuncio_id;
    }

    /**
     * Set the value of anuncio_id
     *
     * @return  self
     */ 
    public function setAnuncio_id($anuncio_id)
    {
        $this->anuncio_id = $anuncio_id;

        return $this;
    }
    

?>