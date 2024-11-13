<?php include("register_db.php"); 
$id = $_GET['id'];
$query = "DELETE from form where id= '$id'";
$data = mysqli_query($connection, $query);
if($data)
{
    echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
    echo "<script> location.href='display.php'; </script>";
    exit;
}
else{
    echo "<script type='text/javascript'>alert('Delete Unsuccessful!')</script>";
    echo "<script> location.href='display.php'; </script>";
}

?>