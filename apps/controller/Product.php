<?php
class Product extends Controller{

    public function index(){
        echo "This is index of product";

        $data = $prodata = [
            ['product_name'=>'laptop', 'product_price'=>'25000'],
            ['product_name'=>'keyboard', 'product_price'=>'5000'],
        ];
        $this->load->name = "Rajesh";
        $this->load->vieww('product.index',compact('data'),true);
        
        // $this->load->view();

        $x = request('hello');
        print_r($x);
        echo "<br>";
        print_r($_GET);
    }


    public function create(){
        echo "This is create of product";
    }
    public function store(){
        echo "This is store of product";
    }
    
}
?>

<form> 
<input type="text" name="hello"> 
<button> pk </button>
</form>