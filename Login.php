<?php
    include('Config.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="Form.css">
    <title>Login form</title>
</head>
<body>
    <div class="container">
     <form class="form-box" action="Login.php" method="POST">
        <div class="logo">
            <i class="fa fa-car"></i>
            <h1> KESLE CAR</h1>
        </div><br>
        <div class="text-form">
            <h2>Welcome to Kesle car</h2>
            <p>Please sign-in to your account and start the adventure</p>
        </div>
        <div class="inputs">
            <input type="text" placeholder="Admin name" required name="AdminName"><br><br>
            <input type="password" placeholder="Password" required name="Password"><br>
        </div><br>
        <div class="check-box">
            <input type="checkbox" required>
            <p>Remember me</p>
            <div class="forget">
                <a href="#">Forgot password</a>
            </div>
        </div><br>
        <div class="btns">
            <input class="btn" type="submit" value="LOGIN" name="Login"><br><br>
        <p>New on our platform? <a href="Register.php">Create an account</a></p>
        </div><br>
        
       <div class="line">
        <hr><p>or</p><hr>
       </div><br>
       <div class="icon-form">
        <i class="fa fa-facebook-f" style="color: #1877F2;"></i>
        <i class="fa fa-twitter" style="color: #1877F2;"></i>
        <i class="fa fa-github"></i>
        <i class="fa fa-google" style="color: #DB4437;"></i>
       </div>
     </form>
    </div>

    <?php
    if(isset($_POST['Login'])){
        $ADNAME = $_POST['AdminName'];
        $PASSWORD = $_POST['Password'];

        $select = "SELECT * FROM `admin` WHERE AdminName = '".$ADNAME."' AND Password = '".$PASSWORD."'  LIMIT 1";
        $runselect = mysqli_query($connect,$select);
        $row = mysqli_fetch_array($runselect);
        if(is_array($row)){
            $_SESSION['AdminName']=$row['AdminName'];
            $_SESSION['Password']=$row['Password'];
            echo"<meta http-equiv='refresh'content= '0.5; url=http:Login.php'>";
            echo "<script>window.location.replace('index.php')</script>";
        }
        else{
            echo("<div class='message'>
            <p>Your Email and Password are incorrect?</p></div>");
        }
    }
    
    ?>
</body>
</html>