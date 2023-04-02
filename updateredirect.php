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
                die();
            }
            else{
                if($found==$passwordd1){
                    //login done
                    session_start();
                    $_SESSION['mail']=$emaill1;
                }
                else{
                    echo "Wrong Password entered";
                    die();
                }
            }
        
            $con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Welcome ".$firstname." ".$lastname." with email id- ".$emaill1;
    ?>
        <form action="updatefname.php" method="post">
            <input type="text" name="ffname" id="ffname" placeholder="Enter your new First Name" required>
            <button type="submit" name = "fnameup" class="btn">Update first name</button><br>
        </form>
        <form action="updatelname.php" method="post">
            <input type="text" name="llname" id="llname" placeholder="Enter your new Last Name" required>
            <button type="submit" class="btn">Update Last Name</button><br>
        </form>
        <form action="updatepassword.php" method="post">
            <input type="password" name="passwordd" id="passwordd" placeholder="Enter your new Password" required>
            <input type="password" name="cpasswordd" id="cpasswordd" placeholder="Confirm Password" required>
            <button type="submit" class="btn">Update Password</button><br>
        </form>
</body>
</html>