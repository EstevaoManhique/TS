<?php
//namespace ;
require_once '../DTO/UserDto.php';
require_once '../Repository/UserRepository.php';

class UsuarioService
{
    
    private $userRepository;
    public function __construct(){
        $this->userRepository = new userRepository();
    }
    
    public function save($userModel){
        return $this->userRepository->save($userModel);
    }

    /*public function existsByEmail($email) {
        return $this->userRepository->existsByEmail($email);
    }*/

    /*public function getAll() {
        return $this->userRepository->getAll();
    }*/

    public function getOne($email){
        //return $this->userRepository->getOne($email);
    }

    public function findByEmailAndSenha($email, $senha) {
        return $this->userRepository->findByEmailAndSenha($email, $senha);
    }

    /*public function delete($userModel) {
        $this->userRepository->delete($userModel);
    }*/
}
