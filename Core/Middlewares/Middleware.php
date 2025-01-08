<?php

namespace Core\Middlewares;



class Middleware
{
    public const MAP = [
        "guest" => Guest::class,
        "auth" => Auth::class,
    ];


    public static function resolve($key){

        if(!$key){
            return;
        };

        $middleware = self::MAP[$key];
        (new $middleware)->handel();
    }

}