<?php

namespace Core\Middlewares;



class Middleware
{
    public const MAP = [
        "guest" => Guest::class,
        "auth" => Auth::class,
    ];

}