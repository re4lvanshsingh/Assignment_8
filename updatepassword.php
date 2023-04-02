<?php       session_start();
            $emai = $_SESSION['mail'];
            $con = mysqli_connect("localhost","root","pppv@123","assign1");
            $pass1=$_POST['passwordd'];
            $pass2=$_POST['cpasswordd'];
            
            if(!$con)die("connection to database failed due to".mysqli_connect_error());
    
            
            if($pass1 == $pass2){
                $sql = "update `users` set `password` = '$pass1' where `email`='$emai' ;";

                if($con->query($sql)==true)echo "Successfully updated";
                else echo "ERROR: $sql <br> $con->error";
            }
            else{
                echo "Wrong: password and confirm password don't match";
            }

            $con->close();
?>