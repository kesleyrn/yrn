<?php
    include('Config.php');
?>
<?php
        if(isset($_POST['update'])){
            $CAND_ID = $_POST['CandidateNationalId'];
            $FNAME = $_POST['FirstName'];
            $LNAME = $_POST['LastName'];
            $GENDER = $_POST['Gender'];
            $DOB = $_POST['DOB'];
            $EXDATE = $_POST['ExameDate'];
            $PHONE = $_POST['PhoneNumber'];
    
        
            $update = "UPDATE `candidate` SET `FirstName`='$FNAME',`LastName`='$LNAME',`Gender`='$GENDER',`DOB`='$DOB',`ExameDate`='$EXDATE',`PhoneNumber`='$PHONE' WHERE `CandidateNationalId`='$CAND_ID'";
            $runupdate = mysqli_query($connect,$update);
            if($runupdate){
                echo"<script>alert('updated successfully')</script>"; 
                header('location:Data.php');
               
            }
            else{
                die("update error" . mysqli_error($connect));
            }
        }
    
    ?>
    <?php
        if(isset($_POST['update'])){
    
            $CAND_ID = $_POST['CandidateNationalId'];
            $LICENSE = $_POST['LicenseExamCategory'];
            $MARKS = $_POST['ObtainedMarks_20'];
            $DECISION = "";
            if ($MARKS >= 12){
                $DECISION = 'pass';
            }else{
                $DECISION = 'failed';
            }

            $update = "UPDATE `grade` SET `LicenseExamCategory`='$LICENSE',`ObtainedMarks_20`='$MARKS',`Decision`='$DECISION' WHERE `CandidateNationalId`='$CAND_ID'";
            $runupdate = mysqli_query($connect,$update);
            if($runupdate){
                echo"<script>alert('updated successfully')</script>"; 
                header('location:Data.php');
               
            }
            else{
                die("update error" . mysqli_error($connect));
            }
        }
    
    ?>
