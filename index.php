<?php
require_once "apps/libs/Session.php";
Session::init();
$files = glob('helper/*.php');
array_map( fn($elements)=>((file_exists($elements))?require_once "$elements":''),$files );

// print_r(CSS);
// include "apps/libs/Loader.php";
// include "helper/config.php";

spl_autoload_register(fn($clsname)=>(file_exists("apps/libs/$clsname.php"))?require_once
"apps/libs/$clsname.php":'' );


new Loader();

?>




