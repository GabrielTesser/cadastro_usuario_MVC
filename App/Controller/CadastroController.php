<?php

    namespace App\Controller;
    use App\Model\CadastroModel;

    class CadastroController extends Controller
    {
        public static function index()
        {
            $model = new CadastroModel();
            $model->getAllRows();

            parent::render('Cadastro/ListaCadastro', $model);
        }

        public static function form()
        {
            $model = new CadastroModel();

            if(isset($_GET['id'])) {
                $model = $model->getById( (int) $$_GET['id']);
            }
            
            parent::render('login/formcadastro', $model);
        }

        public static function save()
        {
            $model = new CadastroModel();

            $model->id = $_POST['id'];
            $model->nome = $_POST['nome'];
            $model->email = $_POST['email'];
            $model->senha = $_POST['senha'];
    
            $model->save();
    
            header("Location: /casdastro"); 
        }

        public static function delete()
        {
            $model = new CadastroModel();

            $model->delete ( (int) $_GET['id']);

            header ("Location: /cadastro");
        }
    }