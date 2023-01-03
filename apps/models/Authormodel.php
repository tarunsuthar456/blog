<?php
class Authormodel extends model {

    function is_author($name,$isadmin='no',$data=''){
        $q = '';
        if($isadmin && ( ($isadmin=='yes') || ($isadmin=='no') ) ){
        $q = " and is_admin = '$isadmin'";
        }
        $cols=(is_array($data)?implode(',',$data):(($data)?$data:'username'));

        $sql = "Select $cols from $this->table where username=? $q";

        $aobj = $this->prepare($sql);   
        $aobj->bindValue(1,$name);
        $aobj->execute();
        if( $result = $aobj->fetch(PDO::FETCH_ASSOC)){
            return $result;
        }
        return false;
}
}
?>