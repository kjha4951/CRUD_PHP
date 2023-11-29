<?php include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM employee WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data){
?>
<script type="text/javascript">
    alert("Data deleted successfully ");
    window.open("http://localhost/project_in_php/view.php","_self");

</script>
<?php
}else{
    ?>
    <script type="text/javascript">
        alert("please try again");
    </script>
    <?php
}
?>