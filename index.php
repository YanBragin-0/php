<?php
    $router =[
        "/Main"=> ["title"=>"Головна сторінка","file"=>"Main.php"],
        "/register"=>["title"=>"Реєстрація","file"=>"register.php"]
    ];
    $url = $_SERVER["REQUEST_URI"];

    if(isset($router[$url])){
        $title = $router[$url]["title"];
        include "pages/". $router[$url]["file"];
    }
    else{
        $title = "Not Found";
        include "pages/404.php";
    }
?>