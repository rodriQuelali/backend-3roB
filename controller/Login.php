<?php
require_once "model/Login_model.php";

class Login {

    public function validarDatos()
    {
        # code...
        $returnDatos = array();
      $res = Model_login::modelLogin();
       if($res == "ok"){
        $returnDatos [] = array(
            "datos"=>"correcto"
        ); 
       }else{
        $returnDatos [] = array(
            "datos"=>"incorrecto"
        ); 
       }

        echo json_encode($returnDatos);
    }
    
}
