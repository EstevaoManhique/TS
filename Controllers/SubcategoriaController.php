<?php

require_once "./Model/SubcategoriaModel.php";
require_once "./Service/SubcategoriaService.php";
require_once './DTO/SubcategoriaDto.php';
//namespace ;

class SubCategoriaController
{
        
    private $subcategoriaService;

    public function __construct(){
        $this->subcategoriaService = new SubcategoriaService();
    }

    public function save(Subcategoriatdto $subcategoriatdto)
    {
        //if($this->subcategoriaService->existsByEmail($catDto->getEmail())){
          //  return "";//ResponseEntity.status(HttpStatus.OK).body("Este subcategoria ja existe!");
        //}
        $catModel = new SubcategoriaModel();
        $catModel->setDescricao($subcategoriatdto->getDescricao());
        $catModel->setCategoria($subcategoriatdto->getSubcategoriaModel());
        return $this->subcategoriaService->save($catModel);
    }

    public function findAll()
    {
        return $this->subcategoriaService->findAll();   
    }

    public function findById($id)
    {
        $ss = new SubcategoriaService();
        $sm = new SubcategoriaModel();
        $sm = $ss->findById($id);
        return $sm;
    }

    public function update($id)
    {
        $subcatModel = $this->subcategoriaService->findById($id);
        if (!isset($subcatModel)){
            return false;
        }
        $catModel = new SubcategoriaModel();
        
        $catModel->setDescricao($subcatModel->getDescricao());
        $catModel->setId($subcatModel->getCategoria()->getId());
        
        return $this->subcategoriaService->save($catModel);
    }

    public function delete($id)
    {
        $catModel = $this->subcategoriaService->findById($id);
        if (isset($catModel)){
            //return ResponseEntity.status(HttpStatus.NOT_FOUND).body("Conflict:Subcategoria nao existe");
        }
        //$this->subcategoriaService->delete($catModel->email);
        //return ResponseEntity.status(HttpStatus.OK).body("Subcategoria eliminado com sucesso!");   
    }

}
