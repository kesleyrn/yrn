<?php
    include('Config.php');
    session_start();
?>
<?php
    include('update.php');
?>
<?php
ini_set("display_errors","off");
 ?>
 <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $select = "SELECT* FROM grade WHERE CandidateNationalId ='".$id."'";
        $runselect =mysqli_query($connect,$select);

        while($row =mysqli_fetch_array($runselect)){
            $CAND_ID = $row['CandidateNationalId'];
            $LICENSE = $row['LicenseExamCategory'];
            $MARKS = $row['ObtainedMarks_20'];
            $DECISION = $row['Decision'];


        }
}
?>
 <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $select = "SELECT* FROM candidate WHERE CandidateNationalId ='".$id."'";
        $runselect =mysqli_query($connect,$select);

        while($row =mysqli_fetch_array($runselect)){
            $CAND_ID = $row['CandidateNationalId'];
            $FNAME = $row['FirstName'];
            $LNAME = $row['LastName'];
            $GENDER = $row['Gender'];
            $DOB = $row['DOB'];
            $EXDATE = $row['ExameDate'];
            $PHONE = $row['PhoneNumber'];


        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>UMUCYO UDL</title>
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
                                <a href="index.php">Home <i class="fa fa-home"></i></a>
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
                <div class="big-box">
            <div class="text-big-box">
               <div class="text">
                <h2>Total Revenue</h2>
                <div class="text-number">
                   <p style="color: rgb(240, 139, 67);">2020</p>
                    <p style="color: #d86268;">2023</p>
                </div><br>
                <h2>2023 Total Encome</h2><br>
                <center><p style="color: rgb(240, 139, 67);">Amount: $2493</p></center>
               </div>
               <div class="big-box-img">
                <img src="image/undraw_Revenue_re_2bmg.png" alt="image">
               </div>
               <div class="text-icon">
                <i class="fa-solid fa-ellipsis-vertical profite2" ></i>
               </div>
            </div>
            <div class="line"></div>
            <div class="big-box-right">
                <button style="color:rgb(240, 139, 67);">2023 <i class="fa fa-sort-down" style="color:rgb(240, 139, 67);"></i></button><br><br>
                <img src="image/undraw_Growth_curve_re_t5s7.png" alt="image">
                <h3>62% Company Growth</h3>
                <div class="last-icon">
                    <i class="fa fa-dollar icon" style="color:rgb(240, 139, 67);"></i> 
                    <p>2023</p>
                </div>  
            </div>
        </div>
        
            </div>
          </div>

          <div class="candidate">
            <div class="condidate-form">
                <form action="Data.php" method="POST">
                    <h1 style="color: rgb(240, 139, 67);">Manage Candidate</h1><br><br>   
                    <input type="text" placeholder="Candidate Natinal ID" name="CandidateNationalId" value="<?php echo $CAND_ID;?>"><br><br>  
                    <input type="text" placeholder="First Name" name="FirstName" value="<?php echo $FNAME;?>"><br><br>
                    <input type="text" placeholder="Last Name" name="LastName" value="<?php echo $LNAME;?>"><br><br>
                    <select class="input" name="Gender" value="<?php echo $GENDER;?>">
                        <option>Male</option>
                        <option>Famele</option>
                    </select><br><br>
                    <input type="date" placeholder="Date of birth" name="DOB" value="<?php echo $DOB;?>"><br><br>
                    <input type="date" placeholder="Exame Date" name="ExameDate" value="<?php echo $EXDATE;?>"><br><br>
                    <input type="number" placeholder="Phone Number" name="PhoneNumber" value="<?php echo $PHONE;?>"><br><br>
                    <input style="color:white;" class="btn" type="submit" value="CREATE" name="create" ><br><br>
                    <input style="color:white;" class="btn" type="submit" value="UPDATE" name="update">
                    
                </form>
<?php
    if(isset($_POST['create'])){
        $CAND_ID = $_POST['CandidateNationalId'];
        $FNAME = $_POST['FirstName'];
        $LNAME = $_POST['LastName'];
        $GENDER = $_POST['Gender'];
        $DOB = $_POST['DOB'];
        $EXDATE = $_POST['ExameDate'];
        $PHONE = $_POST['PhoneNumber'];

        $insert = "INSERT INTO `candidate`(`CandidateNationalId`, `FirstName`, `LastName`, `Gender`, `DOB`, `ExameDate`, `PhoneNumber`) VALUES ('$CAND_ID','$FNAME','$LNAME','$GENDER','$DOB','$EXDATE','$PHONE')";
        $runinsert = mysqli_query($connect,$insert);
        if($runinsert){
            echo "<script>window.location.replace('Data.php')</script>";
        }
        else{
            die("inserted failed" . mysqli_error($connect));
        }
    }

?>
    <?php
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $delete = "DELETE FROM candidate WHERE CandidateNationalId = '$id'";
        $rundelete = mysqli_query($connect,$delete);
        if($rundelete){
            header("location:Data.php");
        }
        else{
            die("<script>alert('deleted failed')</script>" . mysqli_error($connect));
        }
        }

?>
            </div>
            <div class="condidate-view">
                <div class="table">
                    <center style="color: rgb(240, 139, 67);"><h1>View Candidate</h1><br><br></center>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>First Name</th>
                            <th>Last Names</th>
                            <th>Gender</th>
                            <th>Date of birth</th>
                            <th>Exame Date</th>
                            <th>Phone</th>
                            <th colspan="2">Command</th>
                        </tr>
                        <?php
                    $select = "SELECT * FROM `candidate`";
                    $runselect = mysqli_query($connect,$select);
                    while($row = mysqli_fetch_array($runselect)){
                        $CAND_ID = $row['CandidateNationalId'];
                        $FNAME = $row['FirstName'];
                        $LNAME = $row['LastName'];
                        $GENDER = $row['Gender'];
                        $DOB = $row['DOB'];
                        $EXDATE = $row['ExameDate'];
                        $PHONE = $row['PhoneNumber'];
                    ?>
                    <tr>
                        <td><?php echo $CAND_ID;?></td>
                        <td><?php echo $FNAME;?></td>
                        <td><?php echo $LNAME;?></td>
                        <td><?php echo $GENDER;?></td>
                        <td><?php echo $DOB;?></td>
                        <td><?php echo $EXDATE;?></td>
                        <td><?php echo $PHONE;?></td>
                        <td><a href="Data.php? id=<?php echo $CAND_ID;?>"><img src="image/update.png" alt="image"></a></td>
                        <td><a href="Data.php? deleteid=<?php echo $CAND_ID;?>"><img src="image/delete.png" alt="image"></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </table>
                </div>
            </div>
          </div>

          <div class="candidate">
            <div class="condidate-form">
                <form action="Data.php" method="POST">
                    <h1 style="color: rgb(240, 139, 67);">Manage Grade</h1><br><br>   
                    
            <select  class="input" name="CandidateNationalId" id="" value="<?php echo $CAND_ID;?>" required> 
                <?php
                $select_code = mysqli_query($connect, "SELECT * FROM `candidate`");
                foreach($select_code as $data){
                    ?>
                        <option  name="CandidateNationalId" value="<?=$data['CandidateNationalId']?>"><?=$data['FirstName']?> <?=$data['LastName']?></option>
                    <?php
                }

                ?>
            </select><br><br>  
                    <input type="text" placeholder="License Exam Category" name="LicenseExamCategory" value="<?php echo $LICENSE;?>"><br><br>
                    <input type="number" placeholder="ObtainedMarks/20" name="ObtainedMarks_20" value="<?php echo $MARKS;?>"><br><br>
                    <input style="color:white;" class="btn" type="submit" value="CREATE" name="Grade"><br><br>
                    <input style="color:white;" class="btn" type="submit" value="UPDATE" name="update">
                    
                </form>
                <?php
    if(isset($_POST['Grade'])){
        $CAND_ID = $_POST['CandidateNationalId'];
        $LICENSE = $_POST['LicenseExamCategory'];
        $MARKS = $_POST['ObtainedMarks_20'];
        $DECISION = "";
        if ($MARKS >= 20){
            $DECISION = 'pass';
        }else{
            $DECISION = 'failed';
        }

        $insert = "INSERT INTO `grade`(`CandidateNationalId`, `LicenseExamCategory`, `ObtainedMarks_20`, `Decision`) VALUES ('$CAND_ID','$LICENSE','$MARKS','$DECISION')";
        $runinsert = mysqli_query($connect,$insert);
        if($runinsert){
            echo "<script>window.location.replace('Data.php')</script>";
        }
        else{
            die("inserted failed" . mysqli_error($connect));
        }
    }

?>
    <?php
    if(isset($_GET['deleteid2'])){
        $id = $_GET['deleteid2'];

        $delete = "DELETE FROM grade WHERE CandidateNationalId = '$id'";
        $rundelete = mysqli_query($connect,$delete);
        if($rundelete){
            // header("location:index.php");
        }
        else{
            die("<script>alert('deleted failed')</script>" . mysqli_error($connect));
        }
        }

?>
            </div>
            <div class="condidate-view">
                <div class="table">
                <center style="color: rgb(240, 139, 67);"><h1>View Grade</h1><br><br></center>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>License Exam Category</th>
                            <th>ObtainedMarks/20</th>
                            <th>Decision</th>
                            <th colspan="2">Command</th>
                        </tr>
                        <?php
                    $select = "SELECT * FROM `grade`";
                    $runselect = mysqli_query($connect,$select);
                    while($row = mysqli_fetch_array($runselect)){
                        $CAND_ID = $row['CandidateNationalId'];
                        $LICENSE = $row['LicenseExamCategory'];
                        $MARKS = $row['ObtainedMarks_20'];
                        $DECISION = $row['Decision'];
                    ?>
                    <tr>
                        <td><?php echo $CAND_ID;?></td>
                        <td><?php echo $LICENSE;?></td>
                        <td><?php echo $MARKS;?></td>
                        <td><?php echo $DECISION;?></td>
                        <td><a href="Data.php? id=<?php echo $CAND_ID;?>"><img src="image/update.png" alt="image"></a></td>
                        <td><a href="Data.php? deleteid2=<?php echo $CAND_ID;?>"><img src="image/delete.png" alt="image"></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </table>
                </div>
            </div>
          </div>
            
        </main>
    </div>
    <style>
.candidate .input{
    width: 50vh;
    height: 50px;
    padding: 0 20px;
    font-size: 18px;
    color: rgba(32, 32, 32, 0.555);
    border-radius: 5px;
    border: 1px solid rgba(148, 148, 148, 0.555);
    outline: none;
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
.box1{
    width: 23vh;
    height: 35vh;
    box-shadow: 1px 1px 2px 1px rgba(0,0,0,0.15);
    border-radius: 5px;
    margin-left: 50px;
}
.box2{
    width: 23vh;
    height: 35vh;
    box-shadow: 1px 1px 2px 1px rgba(0,0,0,0.15);
    border-radius: 5px;
    margin-left: 50px;
}
.candidate{
    display: flex;
    padding: 0 45px;
    margin-top: 26vh;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 110vh;
    height: 52%;
    overflow-y: scroll;
}
.big-box{
    display: flex;
    margin-left: 7vh;
    width: 120vh;
    height: 40vh;
    border-radius: 5px;
    padding: 20px 30px;
    box-shadow: 2px 1px 2px 1px rgba(0,0,0,0.15);
}
.text-big-box{
    display: flex;
    width: 60%;
    justify-content: space-between;
}
.text h2{
    color: rgba(41, 35, 35, 0.788);
}
.big-box-img img{
    width: 240px;
}
.text-icon i{
    font-size: 20px;
    color: rgb(240, 139, 67);
    margin-left: -80px;
    cursor: pointer;
}
.text-number{
    display: flex;
    padding: 20px 0;
    justify-content: space-between
}
.text-number p{
    font-weight: 600;
    color: rgba(148, 148, 148, 0.863)
}
.line{
    width: 1px;
    height: 100%;
    background-color: #182b030e;
}
.big-box-right {
    align-items: center;
    justify-content: center;
}
.big-box-right button{
    width: 100px;
    height: 30px;
    margin-left: 70px;
    color: #5CA904;
    background: #5ca90411;
    border: none;
    border-radius: 15px;
    cursor: pointer;
}
.big-box-right button:hover{
    background: none;
    border: 2px solid #5ca90411;
}
.big-box-right img{
    width: 150px;
    margin-left: 30px;
}
.big-box-right h3{
    text-align: center;
    margin-left: 20px;
    color: rgba(148, 148, 148, 0.863);
}
.last-icon{
    display: flex;
    padding: 10px 70px;
}
.last-icon p{
    color: rgba(148, 148, 148, 0.863);
}
.icon {
    text-align: center;
    align-items: center;
    padding: 7px;
    color: #8ee22d;
    background: #5ca90411;
    width: 50px;
    height: 40px;
    font-size: 25px;
    border-radius: 5px;
}
    </style>
</body>
</html>