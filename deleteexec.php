<?php
            $con = mysqli_connect("localhost","root","pppv@123","assign1");

            if(!$con)die("connection to database failed due to" . mysqli_connect_error());
        
            $emaill1 = $_POST['email'];
            $passwordd1 =  $_POST['password'];
            $sq1 = "select `password` from `users` where `email` = '$emaill1';";
            $result = mysqli_query($con,$sq1);

            $data = array();
            if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            }

            $found = "";
            foreach($data as $row){
                $found = $row['password'];
                break;
            }

            if($found == ""){
                echo "No such email ID found";
                die();
            }
            else{
                if($found==$passwordd1){
                    session_start();
                    $_SESSION['mail'] = $emaill1;
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
    <script type="text/javascript">
        var baseUrl="http://localhost/backend";
        function ConfirmDelete(){
            if(confirm("Delete Account")){
                location.href = baseUrl + '/deleteperm.php'
            }
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button type="submit" onclick="ConfirmDelete()"> Delete Account Permanently </button>
</body>
</html>