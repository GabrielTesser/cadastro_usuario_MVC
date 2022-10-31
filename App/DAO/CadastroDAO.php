<?php

    namespace App\DAO;
    use App\Model\CadastroModel;
    use \PDO;

    class CadastroDAO extends DAO
    {
        protected $conexao;

        function __construct()
        {
            parent::__construct();   
        }

        public function insert(CadastroModel $model)
        {
            $sql = "INSERT INTO usuario (nome, email, senha) VALUE (?, ?, ?)";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->senha);

            $stmt->execute();
        }

        public function update(CadastroModel $model)
        {
            $sql = "UPDATE usuario SET nome=?, email=?, senha=? WHERE id=?";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->senha);

            $stmt->execute();
        }

        public function select()
        {
            $sql = "SELECT * FROM usuario";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);        
        }

        public function selectById(int $id)
        {
            include_once 'Model/CategoriaModel.php';

            $sql = "SELECT * FROM usuario WHERE id = ?";

            $stmt->bindValue(1, $id);
            $stmt->execute();
        }

        public function delete(int $id)
        {
            $sql= "DELETE FROM usuario WHERE id = ?";

            $stmt= $this-> conexao-> prepare($sql);
            $stmt-> bindValue(1, $id);
            $stmt-> execute();
        }

    }