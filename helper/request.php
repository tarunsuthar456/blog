<?php
function request($key = null){
    $obj =(object) ['controller'=>'Login','method'=>'index','get'=> $_GET, 'post'=>
    $_POST, 'para'=>''];

    if(isset($_GET['url'])){
        $url = $_GET['url'];
        $url = rtrim($url,'/');
        $url = explode('/',$url);
        // print_r($url);
        $obj->controller = setString($url[0]);
        $obj->method = isset($url[1])?$url[1]:$obj->method;
        $obj->para = $url[2]??$obj->para;
        unset($obj->get['url']);
    };

    if($key){
        $f = 0;
        $kd=[];
        if(array_key_exists($key,$_GET)){
            $f++;
            $kd["get"]= $_GET[$key];
        }
        
        if(array_key_exists($key,$_POST)){
            $f++;
            $kd["post"]= $_POST[$key];
        }

        if ($f){
           return ($f==1)?$kd["get"]??$kd["post"]: $kd;
        }
        return null;
    }

    function dd($data){
        $str='';
        if (is_array($data) or is_object($data)){
            echo "<pre>";
            $str.= print_r($data,1);
        }
        elseif (is_bool($data)){
            $str.=$data?"TRUE":"FALSE";
        }
       else if(is_null($data)){
            $str.="null";
        }
        else{
            $str.=$data;
        }
        echo $str;
        exit();
    }
    
    return $obj;
}
?>