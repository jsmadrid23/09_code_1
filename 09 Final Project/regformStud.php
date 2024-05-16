<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="regstyle.css">

</head>
<body>
    <section class="container">
        <header><b>Registration Form</b></header>
        <form action="regformStud.php" class="form" method = "post">
            <div class="input-box">
                <label for=""><b>Full Name</b></label>
                <input type="text" name="fullname" placeholder="Enter Full Name" id="">
            </div>
            <div class="radio">
                <h3><b>Gender</b></h3>
                <div class="option">
                    <div class="gender">
                    <input type="radio" name="gender" id="">
                    <label for="Male">Male</label>
                    </div>
                    <div class="gender">
                    <input type="radio" name="gender" id="">
                    <label for="Female">Female</label>
                    </div>
                    <div class="gender">
                    <input type="radio" name="gender" id="">
                    <label for="Others">Others</label>
                    </div>
                </div>
            </div>   
            <div class="input-box">
                <label for=""><b>Username</b></label>
                <input type="text" name="username" placeholder="Enter Username" id="">
            </div>
            <div class="input-box">
                <label for=""><b>Password</b></label>
                <input type="password" name="password" placeholder="Enter Password" id="">
            </div>
            <div class="input-box">
                <label for=""><b>Email</b></label>
                <input type="email" name="email" placeholder="Enter a valid Email" id="">
            </div>
            <div class="input-box">
                <label for=""><b>Address</b></label>
                <input type="text" name="address" placeholder="Enter your Address" id="">
            </div>
            <div class="input-box">
                <label for=""><b>Contact Number</b></label>
                <input type="number" name="num" placeholder="Enter your Contact/Phone Number" id="">
            </div>
            <div>
                <input type="submit" class="submitBtn" name="submit" value="Register" id="">
            </div>
            <h5 style="margin-top: 10px;"><center>Already have an account? <a href="login.php">Login here</center></a></h5>

        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
<?php 
require_once "data_con.php";
include "send_verification.php";

if(isset($_POST['submit'])){

    $fullName = $_POST['fullname'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contactNum = $_POST['num'];
    $role = "Customer";

    $otp = rand(000000, 999999); //random number generator for OTP 


    $insertsql = "Insert into user_table(user_id, full_name, role, username, password, email, otp, gender, number, address)
    values ('','$fullName', '$role', '$username', '$password', '$email', '$otp', '$gender', '$contactNum', '$address')";

    $result = $amconn->query($insertsql);

    if($result == True){
    ?>
    <script>
        Swal.fire({
        position: "center",
        icon: "success",
        title: "Successfully added",
        showConfirmButton: false,
        timer: 1500
        });

    </script>

    <?php

    send_verification($fullName, $email, $otp);

    header("location: otp.php");
    } else {
        //if not inserted
       echo $amconn->error; //display table error
    }
    

}
?>