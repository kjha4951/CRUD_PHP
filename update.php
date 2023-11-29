<?php include 'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM employee WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<link rel="stylesheet" href="style.css">
<div class="container">
<h1>Update<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
  <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
</svg></h1>
<form action="" method="post">
    <input value="<?php echo $row['firstname']?>" type="text" name="firstname" placeholder="Enter your Firstname"><br><br>
    <input value="<?php echo $row['lastname']?>"  type="text" name="lastname" placeholder="Enter your Lastname"><br><br>
    <input value="<?php echo $row['age']?>"  type="number" name="age" placeholder="Enter your age"><br><br>
    <input type="submit" name="update_btn" value="update">
    <button><a href="view.php">back</a></button>
    
</form>
</div>

<?php
    if(isset($_POST['update_btn'])){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];
        $update="UPDATE employee SET firstname='$fname',lastname='$lname',age='$age' where id='$id'";
        $data=mysqli_query($con,$update);
    
        if($data){
          ?>
          <script type="text/javascript" >
            alert("data Updated successfully");
            window.open("http://localhost/project_in_php/view.php","_self");
          </script>
          <?php
        }else{
            ?>
            <script type="text/javascript" >
              alert("please try again");
            </script>
            <?php
    }
}
    ?>