<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="regstyle.css">

</head>
<body>
    <section class="container">
        <header><b>Verify with OTP</b></header>
        <form action="otp.php" method="post" class="form">
            <div class="input-box">
                <label for=""><b>Please enter the OTP sent to your email</b></label>
                <input type="text" name="otp" placeholder="e.g. 103489" id="">
            </div>
            <div>
                <input type="submit" class="submitBtn" name="submit" value="Verify" id="">
            </div>
            <h5 style="margin-top: 10px;"><center>Didn't receive OTP code? <a href="regformStud.php">Resend here</center></a></h5>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php 
require_once "data_con.php";

if(isset($_POST['submit'])){

    //user OTP input 
    $otp_user = $_POST['otp'];

    $otp_sql = "Select * FROM user_table WHERE otp = '".$otp_user."'";
    $result = $amconn->query($otp_sql);

    if($result->num_rows == 1){
        $updatesql= "UPDATE user_table SET status='Active', otp= NULL WHERE otp='".$otp_user."'";
        $amconn->query($updatesql);
        header("location: login.php");
    }else{
        ?>
        
        <script>
            Swal.fire("Error! Invalid OTP");
        </script>

        <?php
    }
}

?>