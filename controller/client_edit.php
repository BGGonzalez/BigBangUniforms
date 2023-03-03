<?php

if(!empty($_POST["edit_btn"])){
    if(!empty($_POST["name"]) and 
       !empty($_POST["last_name"]) and
       !empty($_POST["email"]) and
       !empty($_POST["phone"])){

        $client = new Client();
        $client->setId($_GET["id"]);
        $client->setName($_POST["name"]);
        $client->setLastName($_POST["last_name"]);
        $client->setEmail($_POST["email"]);
        $client->setPhone($_POST["phone"]);

        $query = new ClientDao();
        $result = $query->updateClient($client);
        echo $result;

    }else{
        echo "Faltan Campos por Ingresar <br/><br/>";
    }
}

?>