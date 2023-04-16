<form action="search.php" method="post" >
<fieldset>

<input type="text" name="search" id="1" place_holder="Search" value="" >
<input type="submit" name="sr" value="serach by name" >

<hr>
</fieldset>
</form>


<?php
$con=mysqli_connect('localhost','root','','product_db');
if (isset($_POST['sr'])) {
    $name = $_REQUEST['search'];
    
    $query="SELECT * FROM products WHERE name='{$name}' ";
    $result = mysqli_query($con,$query);
    $count= mysqli_num_rows($result);



if($count>0){

    ?>
    <form action="">
        <fieldset>
            <legend><b>Display</b>
            </legend>
    <table border="1">
        <thead class="thead-dark" >
            <tr>
                <th>Name</th>
                <th>Profit</th>
                <th>operation</th>

            </tr>
        </thead>

    <?php

while($row = mysqli_fetch_assoc($result)){
    echo "<pre>";
            $name=$row['name'];
            $bprice=$row['bprice'];
            $sprice=$row['sprice'];
            
            $profit = $sprice-$bprice;
           
        
        echo "</pre>";
        ?>
        <tbody>
            <tr>
                <td> <?php echo  $name ?> </td>
                <td><?php echo $profit ?></td>

                <td>  <a href="edit.php?name=<?php echo $name ?>">Edit</a> || <a href="delectproduct.php?name=<?php echo $name  ?>"> delete</a>  </td>  
            </tr>
        </tbody>
        
     
     <?php
    }
     
     ?>
     
         </table>
         
        </fieldset>
    </form>
<?php
}
else  echo " there is not such data in the database"; 
}
?>
