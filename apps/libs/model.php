<?php
class model extends PDO{
    protected $table, $keycol='id';
    public function __construct($tbl){
        parent::__construct("mysql:host=localhost;dbname=blog",'root','');
        // if(!$this->table){
        $this->table= $tbl;
        // }
    }

    public function insert($data){
        $keys = array_keys($data);
        $skeys = implode(',',$keys);

        $keys = array_map(fn($k)=>":$k",$keys);
        $lkeys = implode(',',$keys);
        $sql = "insert into $this->table ($skeys) values($lkeys) ";
        echo $sql;
        $obj = $this->prepare($sql);
        $obj->execute($data); 
        return $this->lastInsertId();
    } 

    public function update($data,$id){
        $data['id']=$id;
        
        $sql = "Update $this->tbl set";
        foreach($data as $key=>$value){
            $sql .= "$key = '$value',";
        }
        $sql= substr($sql,0,-1)." where $this->keycol = '$id'";
        $obj = $this->prepare($sql);
        $obj->execute($data);   
    }
    // update article set title = 'Hello', description = 'hey' where id = $id;

    public function all($col='*',$orderby=null,$order= 'desc'){
        if(!$orderby){
            $orderby = $this->keycol;
        }
        $col = (is_array($col))? implode(',',$col):$col;
        $sql = "Select $col from $this->table order by $orderby $order";

        $obj= $this->prepare($sql);
        $obj->execute();
        return $obj->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id,$col="*"){
        $col = (is_array($col))? implode(',',$col): $col;
        echo $sql = "select $col from $this->table where $this->keycol = '$id'";
        $obj= $this->prepare($sql);
        $obj->execute();
        return $obj->fetch(PDO::FETCH_ASSOC);
    }
}
?>
