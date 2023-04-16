<form action="delete.php" method="post">
    <fieldset>
        <legend>Delete Product</legend>

        <?php
        $con = mysqli_connect('localhost', 'root', '', 'product_db');

       // print_r($_REQUEST);
        $reciv = $_REQUEST['name'];
       

        $dl = "SELECT * FROM `products` WHERE name = '{$reciv}' ";
        $result = mysqli_query($con, $dl);

       $row = mysqli_fetch_assoc($result);      
        session_start();
        
        $_SESSION["name"] = $row['name'];
       
       
            echo "<pre>";
             //print_r($row);
            $name = $row['name'];
            $bprice = $row['bprice'];
            $sprice = $row['sprice'];
              echo  $name ."<br>" ; 
              echo  $bprice."<br>";
              echo  $sprice ."<br>";
              echo "</pre>";
        
       
            ?> 
        <input type="submit" name="dl" value="Delete">


    </fieldset>
</form>