<?php
class ClientDao{
    public function selectClient(){
        $data = array();
        $connector = new Connect();

        $result = $connector->connectionDataBase("SELECT * from client_bbu");
        if(mysqli_num_rows($result) > 0){
            while($dbdata = mysqli_fetch_assoc($result)){
                $client = new Client();
                $client->setId($dbdata["id"]);
                $client->setName($dbdata["name"]);
                $client->setLastName($dbdata["last_name"]);
                $client->setEmail($dbdata["email"]);
                $client->setPhone($dbdata["phone"]);
                array_push($data, $client);
            }
        }
        return $data;
    }

    public function selectByIdClient($id){
        $connector = new Connect();

        $result = $connector->connectionDataBase("SELECT * from client_bbu WHERE id=$id");
        if(mysqli_num_rows($result) > 0){
                $dbdata = mysqli_fetch_assoc($result);
                $client = new Client();
                $client->setId($dbdata["id"]);
                $client->setName($dbdata["name"]);
                $client->setLastName($dbdata["last_name"]);
                $client->setEmail($dbdata["email"]);
                $client->setPhone($dbdata["phone"]);
        }
        return $client;
    }

    public function insertClient(Client $client){
        $connector = new Connect();
        $name = $client->getName();
        $lastName = $client->getLastName();
        $email = $client->getEmail();
        $phone = $client->getPhone();
        $result = $connector->connectionDataBase("INSERT INTO client_bbu(name,last_name,email,phone) VALUES('$name','$lastName','$email','$phone')");
        if ($result==1) {
            return '<div class="alert alert-success">El Cliente fue Agregado a la Base de Datos</div>';
        } else {
            return '<div class="alert alert-danger">ERROR: Cliente no Agregado</div>';
        }
        return null;
    }

    public function updateClient(Client $client){
        $connector = new Connect();
        $id = $client->getId();
        $name = $client->getName();
        $lastName = $client->getLastName();
        $email = $client->getEmail();
        $phone = $client->getPhone();
        $result = $connector->connectionDataBase("UPDATE client_bbu set name='$name',last_name='$lastName',email='$email',phone='$phone' WHERE id=$id");
        if ($result==1) {
            header("location:../index.php");
        } else {
            return '<div class="alert alert-danger">ERROR: Cliente no Modificado</div>';
        }
        return null;
    }

    public function deleteClient(Client $client){
        $connector = new Connect();
        $id = $client->getId();
        $result = $connector->connectionDataBase("DELETE from client_bbu WHERE id=$id");
        if ($result==1) {
            header("location:index.php");
        } else {
            return '<div class="alert alert-warning">ERROR: No se Eliminaron los Datos</div>';
        }
        return null;
    }

}
?>