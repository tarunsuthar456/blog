<!-- <link rel="stylesheets" href="public/css/bootstrap-grid.css"> -->
<div class="contriner">
<div class="bg-dark text-white p-2">
<h3 class="h3 text-center"> Author registration </h3>
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
        <div class="alert alert-danger"><?= "hello" ?></div>
        <?php
    }
    Session::delete('error');
}
?>



<form method="post" action="<?=ROOT?>author/store">
<div class="form-group">
    <label for="username">User Name</label>
    <input type="text" class="form-control"  id="username" name="username" placeholder="Enter Username" 
    onchange="checkuser(this.value,pv)" pattern='[a-z0-9_@]{5,50}' onkeyup="this.value=this.value.toLowerCase()">    
    </div>
<span id="pv"> </span>  
    
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter Password">
    </div>

      <div class="form-group">
    <label for="confirm password">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="cpassword"  placeholder="confirm Password">
    </div>

    <div class="form-group">
    <label for="email">Enter email</label>
    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter email">
    </div>

        <!-- <div class="form-group">
    <label for="gender">Gender</label>
    Male:<input type="radio" class="form-control" name="gender" id="gender" value="male"  placeholder="gender">
    Female:<input type="radio" class="form-control" name="gender" id="gender" value="female" placeholder="gender">
    </div> -->

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
echo ROOT;

?>