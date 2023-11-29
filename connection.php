<?php
$host="localhost";
$user="root";
$pass="";
$db="employee";
//

$con=mysqli_connect($host,$user,$pass,$db);

if($con){

    echo "";

}else{
    echo"Db not connected";
}

?>

