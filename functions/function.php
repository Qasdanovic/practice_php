<?php

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    die();
}

function abort(){
    http_response_code(404);
    require "views/error.php";
    die();
}


function get_bg($url){
    echo $_SERVER["REQUEST_URI"] === $url ? 'bg-gray-900 text-white :text-gray-300 hover:bg-gray-700 hover':'text-white';
}
?>