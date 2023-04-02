<?php       
            $con = mysqli_connect("localhost","root","pppv@123","assign1");
            session_start();
            $emai = $_SESSION['mail'];
            
            if(!$con)die("connection to database failed due to".mysqli_connect_error());
            
            $sql = "DELETE FROM `users` where `email` = '$emai';";
            
            if($con->query($sql)==true)echo "Deletion Successful";
            else echo "ERROR: $sql <br> $con->error";

            $con->close();
?>