<?php
class Author extends Controller{
    public function __construct(){

        $this->loadModel('author');
        
        parent::__construct();
        // var_dump($this->author);
        
    }

    public function index(){  
        $data = $this->author->all();
        // print_r($data);
        $this->load->vieww('Author.index',compact('data'));
    }

    public function create(){
        // echo "This is create of product";
        $this->load->vieww('Author.create');
    }

    public function store(){    
        $error = [];
        $username= request('username');

        if(!(trim($username) and preg_match('/^[a-z0-9_@]{5,20}/',$username) and $username 
        == strtolower($username))){
                $error[]= "Please enter valid username";
        }
        else {
            if($this->author->is_author($username)){
                $error[]="This username already exists";
            }
        }

        if(count($error)==0){
        $info = [
            'username'=>$username,
            'password'=>md5(request('password')),
            'email'=>request('email'),
            
        ];
        $this->author->insert($info);
        redirect('author/index');
        }
        else{
            Session::set('error',$error);
            // exit();
            redirect("author/create");
        }
    }
    
    public function edit($id){
        // echo "This is edit";
        $id = dec_url($id);
        $info = $this->author->find($id);
        print_r($info);
    }
    public function checkdata(){

        // print_r($_POST);    
        $name = request('name');

      echo ($this->author->is_author($name))?"<span id='nm'> $name </span> is not available ":
      "<span> $name </span> is available " ;

    }
}
?>
