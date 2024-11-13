<?php include("register_db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <h1 class="title">Registration Form</h1>
        <div class="form">
            <div class="input_field">
                <label for="name">Name</label>
                <input type="text" class="input" id="name" placeholder="Enter Your Full Name" required name="username">
            </div>
            <div class="input_field">
                <label for="email">Email</label>
                <input type="email" class="input" id="email" placeholder="Enter Your Email" required name="email">
            </div>
            <div class="input_field">
                <label for="password">Password</label>
                <input type="password" class="input" id="password" placeholder="Enter Your Password" required name="password">
            </div>
            <div class="input_field">
                <label for="dob">Date Of Birth</label>
                <input type="date" class="input" id="dob" placeholder="Enter Your DOB" required name="dob">
            </div>
            <div class="input_field">
                <label for="tel">Phone No.</label>
                <input type="tel" class="input" id="tel" placeholder="Enter Your Number" required name="phoneNo">
            </div>
            <div class="input_field">
                <label for="address">Address</label>
                <textarea name="address" class="input textarea" id="address"></textarea>
            </div>

            <div class="input_field">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="input selectbox" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Others</option>
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
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </div>
        </form>
    </div>

</body>
</html>

<?php
    if($_POST['register'])
    {
        $username  = $_POST['username'];
        $email     = $_POST['email'];
        $password  = $_POST['password'];
        $dob       = $_POST['dob'];
        $phoneNo   = $_POST['phoneNo'];
        $address   = $_POST['address'];
        $gender    = $_POST['gender'];

        if($username != "" && $email != "" && $password != "" && $dob != "" && $phoneNo != "" && $address != "" && $gender != "select")
        {
        $query = "INSERT INTO form(username,email,password,dob,phoneNo,address,gender) values('$username','$email','$password','$dob','$phoneNo','$address','$gender')";

        $data = mysqli_query($connection,$query);
        if($data){
           // echo "Data Inserted";
           echo "<script type='text/javascript'>alert('Register successful !')</script>";
        }
        else{
            echo "Failed";
        }
        }
    }
?>