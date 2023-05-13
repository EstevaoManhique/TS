<?php
require_once '../Utils/Database.php';

class UserRepository {

    private $db;
    private $user;

    public function __construct(){
        $this->db = new Database;
        $this->user = new UsuarioModel;

    }

        //Register User
    public function save($data){
        $this->db->query('INSERT INTO usuario (tipo, email, estado, nome, outrosNomes, senha) 
        VALUES (:tipo, :email, :estado, :nome, :outrosNomes, :senha)');
        //Bind values
        $this->db->bind(':tipo', $data->getTipo());
        $this->db->bind(':email', $data->getEmail());
        $this->db->bind(':estado', $data->getEstado());
        $this->db->bind(':nome', $data->getNome());
        $this->db->bind(':outrosNomes', $data->getOutrosNomes());
        $this->db->bind(':senha', $data->getSenha());

        //Execute
        if($this->db->execute()){
            return $data;
        }else{
            return false;
        }
    }

    public function findByEmail($email){
        $this->db->query('SELECT * FROM usuario WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            $this->setData($row);
            return $this->user;
        }else{
            return false;
        }
    }

    public function findByEmailAndSenha($email, $senha){
        $this->db->query('SELECT * FROM usuario WHERE email = :email and senha = :senha');
        $this->db->bind(':email', $email);
        $this->db->bind(':senha', $senha);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            $this->setData($row);
            return $this->user;
        }else{
            return false;
        }
    }

    public function setData($row)
    {   
        $this->user->setEmail($row->email);
        $this->user->setEstado($row->estado);
        $this->user->setNome($row->nome);
        $this->user->setOutrosNomes($row->outrosNomes);
        $this->user->setSenha($row->senha);
        $this->user->setTipo($row->tipo);
    }

}