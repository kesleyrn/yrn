<?php
    include('Config.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="Form.css">
    <title>REGISTERING FORM</title>
</head>
<body>
    <div class="container">
        <form class="form-box" action="Register.php" method="POST">
           <div class="logo">
               <i class="fa fa-car"></i>
               <h1>UMUCYO DL</h1>
           </div><br>
           <div class="text-form">
               <h2>Adventure start here</h2>
               <p>Have your License with us</p>
           </div>
           <div class="inputs">
               <input type="number" placeholder="Admin Id" required name="AdminId"><br><br>
               <input type="text" placeholder="Admin name" required name="AdminName"><br><br>
               <input type="password" placeholder="Password" required name="Password"><br>
           </div>
           <div class="check-box">
               <input type="checkbox" required>
               <p>I agree to <a href="#">Privacy policy & terms</a></p>
           </div><br>
           <div class="btns">
               <input class="btn" type="submit" value="SIGN UP" name="Register" ><br><br>
           <p>Already have an account? <a href="login.php">Sign in instead</a></p>
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

        if(isset($_POST['Register'])){
            $ADMINID = $_POST['AdminId'];
            $ADNAME = $_POST['AdminName'];
            $PASSWORD = $_POST['Password'];

            $insert= "INSERT INTO `admin`(`AdminId`, `AdminName`, `Password`) VALUES ('$ADMINID','$ADNAME','$PASSWORD')";
            $runinsert = mysqli_query($connect,$insert);
            if($runinsert){
                echo "<script>window.location.replace('Login.php')</script>";
            }
            else{
                die("inserted failed" . mysqli_error($connect));
            }
        }
       ?>
</body>
</html>