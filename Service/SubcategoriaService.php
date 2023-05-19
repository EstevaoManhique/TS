<?php
//namespace ;
require_once './DTO/SubcategoriaDto.php';
require_once './Repository/SubcategoriaRepository.php';

class SubcategoriaService
{
  
    private $subcategoriaRepository;
    public function __construct(){
        $this->subcategoriaRepository = new SubcategoriaRepository();
    }
    
    public function save($subcategoriaModel){
        return $this->subcategoriaRepository->save($subcategoriaModel);
    }

    public function findById($id){
        return $this->subcategoriaRepository->findById($id);
    }

    public function findAll() {
        return $this->subcategoriaRepository->findAll();
    }

    public function update($subcategoriaModel) {
        return $this->subcategoriaRepository->update($subcategoriaModel);
    }

    public function delete($subcategoriaModel) {
        return $this->subcategoriaRepository->delete($subcategoriaModel);
    }
}
