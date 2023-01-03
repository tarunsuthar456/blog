<?php

class Loader{
    public function __construct(){
        $req = request();
        $controller = $req->controller;
        $method=$req->method;
        $para = $req->para;
        $path = "apps/controller/$controller.php";

        if(file_exists($path)){
            include $path;
            $raj = new $controller; 
            echo "<br>";
            $raj->$method($para);

        }
    }
}

?>