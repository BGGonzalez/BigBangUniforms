<?php

if(!empty($_GET["id"])){
    $client = new Client();
    $client->setId($_GET["id"]);
    $query = new ClientDao();
    $result = $query->deleteClient($client);
    echo $result;
}

?>