<link rel="stylesheets" href="public/css/bootstrap-grid.css">
<style>

</style>
<div class = "bg-dark p-2" >
 <a href="<?=ROOT?>author/create"> Create  </a> 
 </div >
<div class="container">
<!-- <table border="2px solid blue" align="center" width="70%" >  -->
<table class="table " > 

<thead>
<tr>
    <th>S.no.</th>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Full Name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Created_at</th>
    <th>Updated_at</th>
    <th> Action </th>
    
</tr>
</thead>

<tbody>
<?php
$index= 0;
    if(isset($data) && $data){
        foreach ($data as $val){
                                    ?>
    <tr>                                
    <td> <?= ++$index ?> </td>
    <td> <?=$val['id']?></td>
    <td> <?=setString( $val['username'])?></td>
    <td> <?=$val['password']?></td>
    <td> <?=setString( $val['fullname']??" ")?></td>    
    <td> <?=$val['mobile']?></td>
    <td> <?=$val['email']?></td>
    <td> <?=$val['gender']?></td>
    <td> <?=$val['created_at']?></td>
    <td> <?=$val['updated_at']?></td>
    
    <td> <a href="<?=ROOT?>author/edit/ <?= enc_url($val['id'])?>">Edit <a></td>
    <td> </td>
    </tr>
    <?php }
             } else{?>
             <div> Data not found</div>

             <?php } ?>
    </tobdy>

</table>
</div>
