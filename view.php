<?php include 'connection.php'?>
<button class="btn" ><a href="index.php">Home</a></button>
<link rel="stylesheet" href="style.css">
<div class="container">
<table border="1px" cellpadding="10px" cellspacing="0px">
  <tr>
    <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th colspan="2">Action</th>
        
      </tr>
      <?php
      $query="SELECT * FROM employee";
      $data=mysqli_query($con,$query);
      $result=mysqli_num_rows($data);
      if($result){
        while($row=mysqli_fetch_array($data)){
          
            ?>
            <tr>
                <td><?php echo $row['firstname']?></td>
            
                <td><?php echo $row['lastname']?></td>
    
                <td><?php echo $row['age']?></td>
                
                <td><a href="update.php?id=<?php echo $row['id']?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete')"
                 href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>

            </tr>
            
            
            <?php
        }
        
      }else
      {
        ?>
        <tr>
          <td>No Record Found</td>
        </tr>
        <?php
      }
    ?>
</table>
</div>