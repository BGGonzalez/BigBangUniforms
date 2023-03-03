<?php

if(!empty($_POST["register_btn"])){
    if(!empty($_POST["name"]) and 
       !empty($_POST["last_name"]) and
       !empty($_POST["email"]) and
       !empty($_POST["phone"])){

        $client = new Client();
        $client->setId(null);
        $client->setName($_POST["name"]);
        $client->setLastName($_POST["last_name"]);
        $client->setEmail($_POST["email"]);
        $client->setPhone($_POST["phone"]);

        $query = new ClientDao();
        $result = $query->insertClient($client);
        echo $result;

    }else{
        echo "Faltan Campos por Ingresar <br/><br/>";
    }
}

?>