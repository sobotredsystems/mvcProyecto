<?php
    require '../modelo/modelo_usuario.php';

    $MU = new Modelo_usuario();
    $email = htmlspecialchars($_POST['email'],ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'],ENT_QUOTES, 'UTF-8');
    $con = $MU->VerificarUsuario($email, $password);
    $data = json_encode($con);
    if(count($con)>0){
        echo $data;
    }else{

        echo 0;

    }



?>