<?php
namespace Core\Middlewares;


class Auth {


    public static function handel(){
        if(! $_SESSION["user"] ?? false){
            header("location:/");
            exit();
        }
    }
}

?>