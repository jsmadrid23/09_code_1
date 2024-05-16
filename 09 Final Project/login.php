<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="regstyle.css">
    <style>
        .container {
    position: relative;
    max-width: 450px;
    width: 50px%;
    background: #8bd3dd;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 15px black;
}

.container header {
    font-size: 2rem;
    text-align: center;
    font-weight: 400;
}

.container .form {
    margin-top: 30px;
}
.form .input-box input {
    position: relative;
    height: 50px;
    width: 100%;
    outline: none;
    font-size: 1rem;
    border: 1px solid;
    border-radius: 10px;
    padding: 0 15px;
}

    </style>

</head>
<body>
    <section class="container">
        <header><b>Login</b></header>
        <form action="login.php" class="form" method = "post">
            <div class="input-box">
                <label for=""><b>Username</b></label>
                <input type="text" name="username" placeholder="Enter Username" id="">
            </div>
            <div class="input-box">
                <label for=""><b>Password</b></label>
                <input type="password" name="password" placeholder="Enter Password" id="">
            </div>
            <div>
                <input type="submit" class="submitBtn" name="submit" value="Login" id="">
            </div>
            <h5 style="margin-top: 10px;"><center>Don't have an account yet? <a href="regformStud.php">Register here</center></a></h5>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<?php 
require_once "data_con.php";

if(isset($_POST['submit'])){

session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);

$loginsql = "Select * From user_table where username = '".$username."' and '".$password."' and status='Active'";
$loginresult = $amconn->query($loginsql);

if ($loginresult->num_rows == 1) {
    $fielddata = $loginresult->fetch_assoc();
    $role = $fielddata['role'];
    $fullname=$fielddata['full_name'];
    $_SESSION['user_id']= $fielddata['user_id'];
    $user_id= $_SESSION['user_id'];
    $_SESSION['user']= $fullname;
    $logsql= "INSERT INTO logs_table (user_id,action,datetime) VALUES ('$user_id','Logged in', NOW())";
    $amconn->query($logsql);

    if ($role == "Admin") {
        header("location: overview.php");
    }else if ($role == "Customer"){
        header("location: main.php");
    }
    
}else{
    ?>
    <script>
        Swal.fire("Invalid login!");
    </script>
    <?php
}

echo $amconn->error;

}




?>