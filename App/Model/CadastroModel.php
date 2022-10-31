<?php

   namespace App\Model;
   use App\DAO\CadastroDAO;

 class CadastroModel extends Model
 {
    public $id, $nome, $email, $senha;

    public $rows;

    public function save()
    {
        $dao = new CadastroDAO();

         if (empty($this->id))
         {
            $dao->insert($this);
         }
         else
         {
            $dao->update($this);
         }
    }

    public function getAllRows()
    {
         $dao = new CadastroDAO();

         $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
         $dao = new CadastroDAO();

         $obj = $dao->selectById($id);

         return ($obj) ? $obj : new CadastroDAO();
    }

    public function delete(int $id)
    {

        $dao = new CadastroDAO();

        $dao->delete($id);
    }
 }