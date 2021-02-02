<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['sfbut'])){
        $staffId=$_POST['staffid'];
        $password=$_POST['password'];
        $passw=md5($password);
        if($passw==null || $staffId==null){
            echo '<script> alert("Enter all credentials");window.location="staffLogin.php";</script>';
        }
        else{
        $sql="SELECT * FROM stafflogin WHERE staffId='$staffId'";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res) > 0){
        if($row=mysqli_fetch_assoc($res)){
            $dbpass=$row['password'];
            if($passw==$dbpass){
               /* echo ' <script> alert("login successfull")</script> ';*/
                echo '<script> alert("login successfull"); window.location.href="admin.php";</script>';
               $_SESSION["StaffId"]=$row["staffId"];
               $_SESSION["StaffName"]=$row["name"];
            }
            else{
                echo '<script> alert("PASSWORD AND USERNAME NOT MATCHED"); window.location="staffLogin.php";</script> ';
            }
        }
        }
        else{
            echo '<script> alert("USER NOT FOUND !");window.location.href="staffRegister.php";</script> ';
        }
        }
        
    }


?>