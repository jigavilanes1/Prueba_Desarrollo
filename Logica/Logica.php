<?php

    require_once("../Model/UsuariosModel.php");
    $data = json_decode(file_get_contents("php://input"));

    switch ($data->operacion) {
        
        case "GuardarUsuario":
            $Usuario = new Usuario();
            $Usuario-> setPassword(md5($data->password));
            $Usuario->setUsuario($data->usuario);
            $Usuario->Guardar();

            case "Login":
                $Usuario = new Usuario();
                $Usuario-> setPassword (md5($data->password));
                $Usuario->setUsuario($data->usuario);
                $Usuario->Login();
                echo "Correctamente";
    }
    

?>