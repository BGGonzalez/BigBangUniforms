<?php

if(!empty($_POST["register_btn"])){
    if(!empty($_POST["name"]) and 
       !empty($_POST["last_name"]) and
       !empty($_POST["email"]) and
       !empty($_POST["phone"])){

        $name=$_POST["name"];
        $lastName=$_POST["last_name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];

        $sql=$connector->query(" INSERT into client_bbu(name,last_name,email,phone) values('$name','$lastName','$email','$phone') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">El Cliente fue Agregado a la Base de Datos</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR: Cliente no Agregado</div>';
        }

    }else{
        echo "Faltan Campos por Ingresar <br/><br/>";
    }
}

?>