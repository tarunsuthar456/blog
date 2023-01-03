<?php
class Controller {
    protected $load ;
    public function __construct(){
        $this->load = new view();

    }

    public function loadModel($mname,$objname=null){
        if(!$objname){
        $objname = strtolower($mname);}
        $tbl = $mname;
        // $a = "hello";
        // echo $a;
        // echo $tbl;
        $mname = ucfirst(strtolower($mname)).'Model';
        $path = "apps/models/$mname.php";
        if(file_exists($path)){
            include_once $path;
        }
        $this->$objname = new $mname($tbl);

    }      
}

// class A {

// }

// $obj = new A();
// $obj -> name ="Rajesh";
?>