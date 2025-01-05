<?php

namespace Core;
use PDO;

class Database {


    public $connect;
    public $statement;

    public function __construct($config){

        $dsn = http_build_query($config, '', ";");

        $this->connect = new PDO("mysql:" . $dsn, "root", '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO ::FETCH_ASSOC , 
        ]);
    }


    public function query($query, $params = []){

        $this->statement = $this->connect->prepare($query);

        $this->statement->execute($params);
        return $this;
        
    }
    


    public function fetchOne(){
        return $this->statement->fetch();
    }


    public function getAll(){
        return $this->statement->fetchAll();
    }


}
