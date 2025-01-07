<?php
namespace Core\Middlewares;


class Guest {


    public static function handel(){
        if($_SESSION["user"] ?? false){
            header("location:/");
            exit();
        }
    }
}

?>