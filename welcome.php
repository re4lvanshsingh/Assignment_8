<?php
            $con = mysqli_connect("localhost","root","pppv@123","assign1");

            if(!$con)die("connection to database failed due to" . mysqli_connect_error());
        
            $emaill1 = $_POST['email'];
            $passwordd1 =  $_POST['password'];
            $sq1 = "select * from users where email = '$emaill1';";
            $result = mysqli_query($con,$sq1);

            $data = array();
            if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            }

            $found = "";
            $firstname = "";
            $lastname = "";
            foreach($data as $row){
                $found = $row['password'];
                $firstname = $row['fname'];
                $lastname = $row['lname'];
                break;
            }

            if($found == ""){
                echo "No such email ID found";
            }
            else{
                if($found==$passwordd1){
                    echo "Welcome ".$firstname." ".$lastname." with email id- ".$emaill1;
                    die();
                }
                else{
                    echo "Wrong Password entered";
                }
            }
        
            $con->close();
?>