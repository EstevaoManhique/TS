<?php

class UsuarioModel {

    private $tipo;
    private $email;
    private $estado;
    private $nome;
    private $outrosNomes;
    private $senha;
    private $db;

    public function __construct(){
        
    }

	/**
	 * @return mixed
	 */
	public function getTipo() {
		return $this->tipo;
	}
	
	/**
	 * @param mixed $tipo 
	 * @return self
	 */
	public function setTipo($tipo): self {
		$this->tipo = $tipo;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEstado() {
		return $this->estado;
	}
	
	/**
	 * @param mixed $estado 
	 * @return self
	 */
	public function setEstado($estado): self {
		$this->estado = $estado;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getOutrosNomes() {
		return $this->outrosNomes;
	}
	
	/**
	 * @param mixed $outrosNomes 
	 * @return self
	 */
	public function setOutrosNomes($outrosNomes): self {
		$this->outrosNomes = $outrosNomes;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSenha() {
		return $this->senha;
	}
	
	/**
	 * @param mixed $senha 
	 * @return self
	 */
	public function setSenha($senha): self {
		$this->senha = $senha;
		return $this;
	}


        //Find user by email or username
        public function findUserByEmail($email){
            $this->db->query('SELECT * FROM usuario WHERE email = :email');
            $this->db->bind(':email', $email);
    
            $row = $this->db->single();
    
            //Check row
            if($this->db->rowCount() > 0){
                return $row;
            }else{
                return false;
            }
        }
    
        //Register User
        public function register($data){
            $this->db->query('INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) 
            VALUES (:name, :email, :Uid, :senha)');
            //Bind values
            $this->db->bind(':name', $data['usersName']);
            $this->db->bind(':email', $data['usersEmail']);
            $this->db->bind(':Uid', $data['usersUid']);
            $this->db->bind(':senha', $data['usersPwd']);
    
            //Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    
}