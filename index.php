<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  
</head>
<body>
    <h1>Employee Details</h1>
    <div class="container">
      <p>Enter your details bellow<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-down" viewBox="0 0 16 16">
  <path d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.708l-.646.647V10.5a.5.5 0 0 0-1 0v2.793l-.646-.647a.5.5 0 0 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4"/>
</svg></p>

        <form action="" method="post">
            <input type="text" name="firstname" placeholder="Enter your Firstname"><br><br>
            <input type="text" name="lastname" placeholder="Enter your Lastname"><br><br>
            <input type="number" name="age" placeholder="Enter your age"><br><br>
            <input type="submit" name="save_btn" value="save">
            <button><a href="view.php">View</a></button>
            
        </form>
    </div>
    <?php
    if(isset($_POST['save_btn'])){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];
        $query="INSERT INTO employee (firstname,lastname,age) VALUES('$fname','$lname','$age')";
        $data=mysqli_query($con,$query);
    
        if($data){
          ?>
          <script type="text/javascript" >
            alert("data save successfully");
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
</body>
</html>