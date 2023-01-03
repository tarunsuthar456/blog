<!-- <link rel="stylesheets" href="public/css/bootstrap-grid.css"> -->
<div class="contriner">
<div class="bg-dark text-white p-2">
<h3 class="h3 text-center"> Login Form </h3>
 </div>
 </div> 

 <?php

if($e=Session::get('error')){
    if(is_array($e)){
        // print_r($e);
        foreach($e as $k=>$val){ ?>
            <div class="alert alert-danger"> <?=$val?> </div>

        <?php }
    }
    else{
        ?>
        <div class="alert alert-danger"><?= $e ?></div>
        <?php
    }
    Session::delete('error');
}
?>

<form method="post" action="<?=ROOT?>login/index">
<div class="form-group">
    <label for="username">User Name</label>
    <input type="text" class="form-control"  id="username" name="username" placeholder="Enter Username" 
     pattern='[a-z0-9_@]{5,50}' onkeyup="this.value=this.value.toLowerCase()">    
    </div>
    
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>