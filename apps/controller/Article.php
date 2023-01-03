<?php
class Article extends Controller{
    public function __construct(){

        $this->loadModel('article','ac');
        
        parent::__construct();
        
    }

    public function index(){  
        $data = $this->ac->all();
        // print_r($data);
        $this->load->vieww('Article.index',compact('data'));
    }

    public function create(){
        // echo "This is create of product";

        $this->load->vieww('Article.create');
    }

    public function store(){

        $info = [
            'uid'=>'1',
            'title'=>'PHP',
            'description'=>"Hyper text pre-processor"
        ];

        $this->ac->insert($info);
    }
    
    public function edit($id){
        // echo "This is edit";
        $id = dec_url($id);
        $info = $this->ac->find($id);
        print_r($info);
    }
}
?>
