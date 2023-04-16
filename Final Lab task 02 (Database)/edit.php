<form action="updated.php" method="post">
    <fieldset>
        <legend>Edit Product</legend>

        <?php
        $con = mysqli_connect('localhost', 'root', '', 'product_db');

        // print_r($_REQUEST);
       if(isset($_REQUEST['name'])){

        $name = $_REQUEST['name'];
        $dl = "SELECT * FROM `products` WHERE name = '{$name}' ";
        $result = mysqli_query($con, $dl);
        $row = mysqli_fetch_assoc($result);

        //session_start();

        //$_SESSION["name"] = $row['name'];

        $name = $row['name'];
        $bprice = $row['bprice'];
        $sprice = $row['sprice'];
       }
        ?>


    
                Name
                <br>
                <input type="text" name="name" value="<?php echo $name ?>">
                <br>
                Buying price
                <br>
                <input type="number" name="bprice" value="<?php echo $bprice ?>">
                <br>
                selling price
                <br>
                <input type="number" name="sprice" value="<?php echo $sprice ?>">
                <br>
                <input type="submit" name="up" value="update">

            </fieldset>
            
        </form>


        


    </fieldset>
</form>