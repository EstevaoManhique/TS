<?php
    require_once "./Model/UsuarioModel.php";
    require_once "./Service/UsuarioService.php";
    require_once './DTO/UserDto.php';


    class UsuarioController {
        
        private $usuarioService;
        public function __construct(){
            $this->usuarioService = new UsuarioService();
        }

        public static function index()
        {   
            require_once "./View/login.php";
        }
        public function save(UserDto $userDto)
        {
            //if($this->usuarioService->existsByEmail($userDto->getEmail())){
              //  return "";//ResponseEntity.status(HttpStatus.OK).body("Este usuario ja existe!");
            //}
            $userModel = new UsuarioModel();
            $userModel->setTipo($userDto->getTipo());
            $userModel->setEmail($userDto->getEmail());
            $userModel->setEstado("inactivo");
            $userModel->setNome($userDto->getNome());
            $userModel->setOutrosNomes($userDto->getOutrosNomes());
            $userModel->setSenha($userDto->getSenha());
        
            /*Envio da mensagem para o servico de email*/
            //EnvioEmailDto envioEmailDto = new EnvioEmailDto();
            //envioEmailDto.setEmail(userDto.getEmail());
            //rabbitTemplate.convertAndSend("registro.usuario", "", envioEmailDto);
            /*Fim do envio da mensagem para o servico de email*/
            return $this->usuarioService->save($userModel);
        }

        public function getAll()
        {
            //return $this->usuarioService-;>getAll();   
        }

        public function findByEmailAndSenha($email, $senha)
        {
            $us = new UsuarioService();
            $um = new UsuarioModel();
            $um = $us->findByEmailAndSenha($email, $senha);
            return $um;
        }

        public function login()
        {
            unset($_SESSION['error']);
            $logged =false;
            if(isset($_POST['login'])){
                if(isset($_POST['email']) && isset($_POST['senha'])){
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $um = new UsuarioModel();

                    $um = $this->findByEmailAndSenha($email, $senha);

                    if(is_bool($um)){
                        $_SESSION['error'] = true;
                        echo "login";
                        header("location: ../View/login.php");
                        exit();
                    }else{
                        $logged = true;
                    }


                }else{
                    echo "Preencha todos campos!";
                    return;
                }
                
                
                if(isset($logged)){
                    include_once "./View/dashboard.php";
                    return;
                }


            }
  
        }
        public function update($email, $senha)
        {
            $userModel = $this->usuarioService->findByEmailAndSenha($email, $senha);
            if (!isset($userModel)){
                return ///ResponseEntity.status(HttpStatus.NOT_FOUND).body("Conflict:Usuario nao existente");
                ;
            }
            $userModel = new UsuarioModel();
            
            $userModel->setTipo("A");
            $userModel->setEmail($email);
            $userModel->setEstado("activo");
            $userModel->setNome("A");
            $userModel->setOutrosNomes("A");
            $userModel->setSenha("A");
        
            return $this->usuarioService->save($userModel);
        }

        public function delete($email)
        {
            //$userModel = $this->usuarioService->findByEmailAndSenha($email);
            if (isset($userModel)){
                //return ResponseEntity.status(HttpStatus.NOT_FOUND).body("Conflict:Usuario nao existe");
            }
            //$this->usuarioService->delete($userModel->email);
            //return ResponseEntity.status(HttpStatus.OK).body("Usuario eliminado com sucesso!");   
        }
    
    }


    $uc = new UsuarioService();
    $ud = new UserDto();

    /*
    $ud->setEmail("diniselstmddddhhytevao@gmaill.com");
    $ud->setEstado('inactivo');
    $ud->setNome("Dinis");
    $ud->setOutrosNomes("Manhique");
    $ud->setSenha("1234");
    $ud->setTipo("B");    
*/
    //$uc->save($ud);
    //print_r($uc->save($ud));
 //  var_dump($uc->findByEmailAndSenha("estevaomanhique68@gmail.com","1234"));

// print_r("SS");