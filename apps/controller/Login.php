<?php
class Login extends Controller{

    public function __construct(){
        $this->loadModel('author');
        parent::__construct();
    }

    public function index(){

        if($username = request('username')){

            
            if($info = $this->author->is_author($username,'yes',['username','password',
            'fullname','email','mobile'])){

                $password = md5(request('password'));

                if ($info['password'] == $password  ){ 
                    Session::set('loginDtl',$info);
                    redirect('author/index');
                    
                }else{
                    Session::set('error',"Please enter valid username and password");
                }


            }else{
            Session::set('error',"Please enter valid username and password");}
            

        }
    
        $this->load->vieww('login.index');
    } 
}
?>