<?php

class Connect{

    private $connector;

    public function __construct(){
        //Conexion a la base de datos mysql
        $this->connector = mysqli_connect("localhost", "root", "", "mysql_databases");
        $this->connector->set_charset("utf8");
    }

    public function connectionDataBase($sql){
        $result = mysqli_query($this->connector, $sql);
        return $result;
    }

    public function executeQuery($sql){
        $result = mysqli_query($this->connector, $sql);
        return mysqli_num_rows($result);
    }

    public function selectIdQuery($sql){
        $result = mysqli_query($this->connector, $sql);
        if(mysqli_num_rows($result) > 0){
            return mysqli_fetch_assoc($result);
        }
        return null;
    }

    public function close(){
        mysqli_close($this->connector);
    }

}

?>