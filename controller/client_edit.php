<?php

if(!empty($_POST["edit_btn"])){
    if(!empty($_POST["name"]) and 
       !empty($_POST["last_name"]) and
       !empty($_POST["email"]) and
       !empty($_POST["phone"])){

        $id=$_GET["id"];
        $name=$_POST["name"];
        $lastName=$_POST["last_name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];

        $sql=$connector->query(" UPDATE client_bbu set name='$name',last_name='$lastName',email='$email',phone='$phone' WHERE id=$id");
        if ($sql==1) {
            header("location:../index.php");
        } else {
            echo '<div class="alert alert-danger">ERROR: Cliente no Modificado</div>';
        }

    }else{
        echo "Faltan Campos por Ingresar <br/><br/>";
    }
}

?>