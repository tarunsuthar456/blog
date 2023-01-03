
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<script src = "jquery-3.6.1.min.js"> </script>

<script>
function checkuser(name,obj){
    if(name.trim()){
        $.ajax({
            // console.log(name);
            url:"<?=ROOT?>author/checkdata",
            data:'name='+name,            
            type:'post',
            success:function(r) {   
                obj.innerHTML=r;
                console.log(r);
            if($('#nm').length){
                document.getElementById('username').value = "";
                document.getElementById('username').focus();
            }
            }
        })
        console.log(name);
        
    }

}

</script>

