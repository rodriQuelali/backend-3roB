<?php
    class CategoriaController{
        
        public function __construct(){

        }
        public function index(){
            $categorias=Categoria::all();
            require_once('view/Categoria/index.php');
        }
        public function register(){
            require_once('view/Categoria/register.php');
        }
        public function save($categoria){
            Categoria::save($categoria);
            header('Location:../index.php');
        }
        public function update($categoria){
            Categoria::update($categoria);
            header('Location:../index.php');
        }
        public function error(){
            require_once('view/Categoria/error.php');
        }
    }

    //obtiene los datos de la categoria desde la vista y redirecciona al Categoria_Controller
    if(isset($_POST['action'])){
        $categoriaController=new CategoriaController();
        //se añade el archivo CategoriaModel.php
        require_once('../model/CategoriaModel.php');
        //se añade archivo para la conexion
        require_once('../conecction.php');

        if($_POST['action']=='register'){
            $categoria= new Categoria(Null,$_POST['Nombre_categoria']);
            $categoriaController->save($categoria);
        }
        else if($_POST['action']=='update'){
            $categoria= new Categoria($_POST['Cod_categoria'],$_POST['Nombre_categoria']);
            $categoriaController->update($categoria);
        }
    }    
        //se verifica que accion esta definida 
        if(isset($_GET['action'])){
            if($_GET['action']!='register'& $_GET['action']!='index'){
                require_once('../conecction.php');
                $categoriaController=new CategoriaController();
                 //para eliminar
                 if($_GET['action']=='delete'){
                    $categoriaController->delete($_GET['Cod_categoria']);
                }
                //para actualizar
               else if($_GET['action']=='update'){
                    //mostrar listas actualizadas
                    require_once('../model/CategoriaModel.php');
                    $categoria=Categoria::getById($_GET['Cod_categoria']);
                    require_once('../view/Categoria/update.php');
                }
            }
        }
    
?>