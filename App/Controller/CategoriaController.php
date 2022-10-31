<?php

namespace App\Controller;
use App\Model\CategoriaModel;

class CategoriaController extends Controller
{

    public static function index() 
    {

        $model = new CategoriaModel();
        $model->getAllRows();

        parent::render('Categoria/ListaCategoria', $model);
    }

    public static function form()
    {

        $model= new CategoriaModel();

        if(isset($_GET['id'])) {
            $model = $model->getById( (int) $$_GET['id']);
        }

        parent::render('Categoria/FormCategoria', $model);
    }

    public static function save() 
    {


        $model = new CategoriaModel();

        $model->id = $_POST['id'];
        $model->tipo = $_POST['tipo'];

        $model->save();

        header("Location: /categoria"); 
    }

    public static function delete()
    {
        $model = new CategoriaModel();

        $model->delete ( (int) $_GET['id']);

        header ("Location: /categoria");
    }
}