<?php       session_start();
            $emai = $_SESSION['mail'];
            $con = mysqli_connect("localhost","root","pppv@123","assign1");
            
            if(!$con)die("connection to database failed due to".mysqli_connect_error());
        
            $lastname = $_POST['llname'];
            
            $sql = "update `users` set `lname` = '$lastname' where `email`='$emai' ;";
            
            if($con->query($sql)==true)echo "Successfully updated";
            else echo "ERROR: $sql <br> $con->error";

            $con->close();
?>