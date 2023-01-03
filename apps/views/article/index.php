<link rel="stylesheets" href="public/css/bootstrap-grid.css">
<style>

</style>
<div class = "bg-dark p-2" >
 <a href="article/create"> Create  </a> 
 </div >
<div class="container">
<!-- <table border="2px solid blue" align="center" width="70%" >  -->
<table class="table " > 

<thead>
<tr>
    <th>S.no.</th>
    <th>uid</th>
    <th>title</th>
    <th>description</th>
    <th>Action</th>
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
    <td> <?=$val['uid']?></td>
    <td> <?=setString( $val['title'])?></td>
    <td> <?=setString( $val['description'])?></td>
    <td> <a href="<?=ROOT?>article/edit/ <?= enc_url($val['id'])?>">Edit <a></td>
    <td> </td>
    </tr>
    <?php }
             } else{?>
             <div> Data not found</div>

             <?php } ?>
    </tobdy>

</table>
</div>
