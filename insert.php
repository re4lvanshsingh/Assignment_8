<?php

    $con = mysqli_connect("localhost","root","pppv@123","assign1");

    if(!$con)die("connection to database failed due to" . mysqli_connect_error());

    $name1 = $_POST['fname'];
    $name2 = $_POST['lname'];
    $email1 = $_POST['email'];
    $password1 =  $_POST['password'];
    $password2 = $_POST['cpassword'];

    if($password1 == $password2){
        $sql = "INSERT INTO `users` (`fname`,`lname`,`email`,`password`) values ('$name1','$name2','$email1','$password1');";
        
        if($con->query($sql)==true)echo "Successfully Inserted";
        else echo "ERROR: $sql <br> $con->error";
    }
    else echo "Passwords do not match. Enter again";

    $con->close();

?>