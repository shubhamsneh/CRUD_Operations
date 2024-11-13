<?php include("register_db.php"); 
$id = $_GET['id'];
$query = "SELECT * from form where id= '$id'";
$data = mysqli_query($connection, $query);
$total =mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update Form</title>
    <style>
        .container{
            box-shadow: 0px 0px 36px 15px rgba(0, 0, 0, 0.28);
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <h1 class="title">Update Details</h1>
        <div class="form">
            <div class="input_field">
                <label for="name">Name</label>
                <input type="text" class="input" id="name" placeholder="Enter Your Full Name" required name="username" value = "<?php echo $result['username'];   ?>">
            </div>
            <div class="input_field">
                <label for="email">Email</label>
                <input type="email" class="input" id="email" placeholder="Enter Your Email" required name="email" value = "<?php echo $result['email'];?>">
            </div>
            <div class="input_field">
                <label for="password">Password</label>
                <input type="password" class="input" id="password" placeholder="Enter Your Password" required name="password" value = "<?php echo $result['password'];?>">
            </div>
            <div class="input_field">
                <label for="dob">Date Of Birth</label>
                <input type="date" class="input" id="dob" placeholder="Enter Your DOB" required name="dob" value = "<?php echo $result['dob'];?>">
            </div>
            <div class="input_field">
                <label for="tel">Phone No.</label>
                <input type="tel" class="input" id="tel" placeholder="Enter Your Number" required name="phoneNo" value = "<?php echo $result['phoneNo'];?>">
            </div>
            <div class="input_field">
                <label for="address">Address</label>
                <textarea name="address" class="input textarea" id="address" ><?php echo $result['address'];?></textarea>
            </div>

            <div class="input_field">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="input selectbox" required>
                    <option value="">Select Gender</option>
                    <option value="male"
                       <?php
                            if($result['gender'] == 'male')
                            {
                                echo "selected";
                            }
                       ?>>Male</option>
                    <option value="female"
                    <?php
                            if($result['gender'] == 'female')
                            {
                                echo "selected";
                            }
                       ?>>Female</option>
                    <option value="other"
                    <?php
                            if($result['gender'] == 'other')
                            {
                                echo "selected";
                            }
                       ?>>Others</option>
                </select>
            </div>
            <div class="input_field terms">
                <label for="checkbox" class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Update" class="btn" name="update">
            </div>
        </div>
        </form>
    </div>

</body>
</html>

<?php
    if($_POST['update'])
    {
        $username  = $_POST['username'];
        $email     = $_POST['email'];
        $password  = $_POST['password'];
        $dob       = $_POST['dob'];
        $phoneNo   = $_POST['phoneNo'];
        $address   = $_POST['address'];
        $gender    = $_POST['gender'];

        $query= "update form set username='$username',email='$email',password='$password',dob='$dob',phoneNo='$phoneNo',address='$address',gender='$gender' where id='$id'";

        $data = mysqli_query($connection,$query);
        if($data){
           //echo "Data updated";
           echo "<script type='text/javascript'>alert('Updated successfully!')</script>";
           echo "<script> location.href='display.php'; </script>";
            exit;
        }
        else{
            echo "<script type='text/javascript'>alert('Update Unsuccessful!')</script>";
        }
    }
?>