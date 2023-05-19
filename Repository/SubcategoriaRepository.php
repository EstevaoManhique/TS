<?php
require_once './Utils/Database.php';

class SubCategoriaRepository {

    private $db;
    private $subCategoria;

    public function __construct(){
        $this->db = new Database;
        $this->subCategoria = new SubcategoriaModel();

    }

        //Register SubCategoria
    public function save($data){
        $this->db->query('INSERT INTO categoria (descricao, idCategoria) 
        VALUES (:descricao, :idCategoria)');
        //Bind values
        $this->db->bind(':descricao', $data->getTipo());
        $this->db->bind(':idCategoria', $data->getCategoria());

        //Execute
        if($this->db->execute()){
            return $data;
        }else{
            return false;
        }
    }

    public function findById($id){
        $this->db->query('SELECT * FROM categoria WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            $this->setData($row);
            return $this->subCategoria;
        }else{
            return false;
        }
    }

     
    public function findAll()
    {
        $this->db->query('SELECT * FROM categoria');
        $row = $this->db->execute();
        return $row;        
    }

    public function update($data)
    {
        $this->db->query("UPDATE categoria SET descricao=?, idCategoria=? WHERE id=? ");
       
        $this->db->bind(':descricao', $data->getTipo());
        $this->db->bind(':idCategoria', $data->getCategoria());
        $this->db->execute();
    }

    public function delete(int $id)
    {  
        $this->db->query("DELETE FROM categoria WHERE id = ? ");
        $row = $this->db->execute();
        return $row;
    }

    public function setData($row)
    {   
        $this->subCategoria->setId($row->id);
        $this->subCategoria->setDescricao($row->estado);
    }

}