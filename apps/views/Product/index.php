<link rel="stylesheets" href="public/css/bootstrap-grid.css">
<!-- <?php// echo $this->name?> -->
<style>

</style>

<div class="container">
<!-- <table border="2px solid blue" align="center" width="70%" >  -->
<table class="table " > 

<thead>
<tr>
    <th>S.no.</th>
    <th>Product name</th>
    <th>Product price</th>
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
    <td> <?= setString($val['product_name'])?></td>
    <td> <?=setString( $val['product_price'])?></td>
    </tr>
    <?php }
             }?>

    </tobdy>

</table>
</div>
