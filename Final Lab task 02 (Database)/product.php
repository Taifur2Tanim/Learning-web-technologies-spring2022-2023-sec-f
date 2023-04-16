<?php 

 $con = mysqli_connect('localhost','root','','product_db');

 if (isset($_POST['submit'])) {
          
     $name = $_POST['name'];
     $bprice = $_POST['bprice'];
     $sprice = $_POST['sprice'];

     $qury="INSERT INTO `products` (`name`, `bprice`, `sprice`) VALUES ('$name', '$bprice', '$sprice')";
     $result= mysqli_query($con,$qury);

     if (!$con) {
         die( "not connected".mysqli_connect_error());
     }
    
     header("location: display.php");

    
 }

 ?> 