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
    <link rel="stylesheet" href="style.css">
    <title>Kesle car</title>
</head>
<body>
    <div class="container">
        <div class="top-nav">
            <div class="top-link">
                <div class="right">
                   <ul>
                    <li>
                        <a href="#">Blog</i></a>
                        <a href="#">Our service</a>
                        <a href="#">Cars</a>
                    </li>
                   </ul>
                </div>
                <div class="left">
                    <ul>
                        <li>
                            <a href="Register.php">SignUp</i></a>
                            <a href="#">My Account</a>
                            <a href="#">Categoris</a>
                            <a href="#">English</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="link">
                <div class="logo-link">
                    <i class="fa fa-car"></i> &nbsp;
                    <h1> KESLE CAR</h1>
                </div>
                <div class="web-link">
                    <div class="webs">
                        <ul>
                            <li class="links">
                                <a href="#">Home <i class="fa fa-home"></i></a>
                                <a href="#">News <i class="fa fa-pagelines"></i></a>
                                <a href="#">Contact <i class="fa fa-address-book"></i></a>
                                <a href="#">About <i class="fa fa-address-card"></i></a>
                                <a href="Data.php">Data Entry <i class="fa fa-product-hunt"></i></a>
                            </li>
                           </ul>
                    </div>
                    <div class="logout">
                        <a href="Login.php">Logout</a><i class="fa fa-door"></i>
                    </div>
                </div>
            </div>
        </div>
        <main>
          <div class="main">
            <div class="info-box">
                <div class="text-box">
                    <h2 style="color: rgb(240, 139, 67);">Congratulation <?php echo $_SESSION['AdminName'];?></h2>
                    <p>Welcome to our driving license company, where your journey to the open road begins!</p>
                    <button>VIEW SERVICES</button>
                </div>
                <div class="image-box">
                    <img src="image/undraw_electric_car_b7hl.png" alt="">
                </div>
                
            </div>
            <div class="small-box">
                <div class="box1">
                   <div class="box1-icon">
                    <i class="fa fa-user profite"></i>
                    <i class="fa-solid fa-ellipsis-vertical profite2"></i>
                   </div>
                   <div class="box1-text">
                    <h3>Candidate</h3><br>
                    <h2><?php $select = mysqli_query($connect, "SELECT * FROM `candidate`"); echo mysqli_num_rows($select);?></h2><br>
                    <h5><i class="fa fa-arrow-up"></i> 72.8%</h5>
                   </div>
                </div>
                <div class="box2">
                    <div class="box1-icon">
                        <i class="fa fa-address-card profite"></i>
                        <i class="fa fa-grade profite2"></i>
                       </div>
                       <div class="box1-text">
                        <h3>Grade</h3><br>
                        <h2><?php $select = mysqli_query($connect, "SELECT * FROM `grade`"); echo mysqli_num_rows($select);?></h2><br>
                        <h5><i class="fa fa-arrow-up"></i> 28.42%</h5>
                       </div>
                </div>
            </div>
          </div>
          </div>
          <style>
.info-box{
    display: flex;
    justify-content: space-between;
    width: 95vh;
    height: 35vh;
    padding: 20px 20px;
    border-radius: 5px;
    box-shadow: 2px 1px 2px 1px rgba(0,0,0,0.15);
    margin-left: 50px;
}
.top-nav{
    align-items: center;
    justify-content: flex-start;
    padding: 30px 50px;
}
.link{
    display: flex;
    align-items: center;
    padding: 50px 0px;
    width: 100%;
}
          </style>
            
        </main>
    </div>
</body>
</html>