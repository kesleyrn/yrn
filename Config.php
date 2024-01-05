<?php
    $connect = mysqli_connect("localhost","root","","yrn");
    if($connect){
        // echo("connection successfully");
    }
    else{
        die("connection failed" . mysqli_connect_error());
    }
?>