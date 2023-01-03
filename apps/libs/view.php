<script src="jquery-3.6.1.min.js"> </script>

<?php

class view {
    function vieww($path,$variables=[], $show=true){
        // echo "Hello";
        // echo "view";
if(strpos($path,'.')){
    $path = str_replace('.','/',$path);
}
    $path = "apps/views/$path.php";

        if (file_exists($path)){
            extract ($variables);
            // echo "<br>",print_r($variables);
            if ($show==true)
            require_once "apps/views/layout/header.php";

            require_once "apps/views/layout/top.php";
            require_once $path;
            require_once "apps/views/layout/bottom.php";
            
            if ($show==true)                    
            require_once "apps/views/layout/footer.php";
        }
    }

}

?>



