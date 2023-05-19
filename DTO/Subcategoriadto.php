<?php

//namespace ;

require_once "./Model/SubcategoriaModel.php";
class Subcategoriatdto
{

    private $id;
    private $descricao;
    private SubcategoriaModel $SubcategoriaModel;

    /**
     * Get the value of SubcategoriaModel
     */ 
    public function getSubcategoriaModel()
    {
        return $this->SubcategoriaModel;
    }

    /**
     * Set the value of SubcategoriaModel
     *
     * @return  self
     */ 
    public function setSubcategoriaModel($SubcategoriaModel)
    {
        $this->SubcategoriaModel = $SubcategoriaModel;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
