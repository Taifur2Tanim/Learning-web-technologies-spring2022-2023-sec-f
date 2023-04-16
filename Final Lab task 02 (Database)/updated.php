<?php
        $con = mysqli_connect('localhost', 'root', '', 'product_db');

        if(isset($_REQUEST['up'])){
              
            $name = $_REQUEST['name'];
            $bprice = $_REQUEST['bprice'];
            $sprice = $_REQUEST['sprice'];
            
  
     $up = "UPDATE products SET name='{$name}', bprice ='{$bprice}', sprice='{$sprice}' WHERE name= '{$name}' ";
     $result = mysqli_query($con, $up);

    }

      
       header("location: display.php");
        ?>