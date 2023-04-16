<?php
$con=mysqli_connect('localhost','root','','product_db');
$query="SELECT * FROM products";
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

                <td>  <a href="edit.php?name=<?php echo $name ?>">Edit</a> || <a href="deleteproduct.php?name=<?php echo $name  ?>"> delete</a>  </td>  
            </tr>
        </tbody>

        
     
     <?php
    }
     
     ?>
          
         </table>
           <b>total  -> <?php echo $count ?> type of fruit</b>
        </fieldset>
      
    </form>

<?php
}
else  echo " there is not such data in the database"; 

  
?>
